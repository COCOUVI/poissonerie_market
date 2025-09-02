<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\CartItem;
use FedaPay\FedaPay;
use FedaPay\Transaction;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Page de checkout (formulaire avec téléphone + bouton payer)
     */
    public function checkout()
{
    $cart = Cart::with('items.produit')->where('user_id', auth()->id())->first();

    if (!$cart || $cart->items->isEmpty()) {
        return redirect()->route('product.all')->with('error', 'Votre panier est vide.');
    }

    $cartItems = $cart->items;

    $total = $cartItems->sum(function ($item) {
        return $item->quantity * $item->produit->price;
    });

    return view('client.checkout', compact('cartItems', 'total'));
}

   
    /**
     * Page récap d'une commande
     */
    public function show($id)
    {
        $order = Order::with('items.product')->findOrFail($id);

        return view('order.show', compact('order'));
    }



    public function processCheckout(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        // 1. Récupérer le panier de l'utilisateur
        $cart = Cart::with('items')->where('user_id', Auth::id())->first();

        if (!$cart || $cart->items->isEmpty()) {
            return redirect()->route('cart.show')->with('error', 'Votre panier est vide');
        }

        // 2. Créer une commande avec total temporaire à 0
        $order = Order::create([
            'user_id'    => Auth::id(),
            'phone'      => $request->phone,
            'status'     => 'pending',
            'order_code' => strtoupper(uniqid('CMD-')),
            'total'      => 0, // On le mettra à jour après calcul
        ]);

        // 3. Ajouter les produits dans la commande
        $total = 0;

        foreach ($cart->items as $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'produit_id' => $item->produit_id,
                'quantity'   => $item->quantity,
                'price'      => $item->price,
            ]);

            $total += $item->price * $item->quantity;
        }

        // 4. Mettre à jour le total dans la commande
        $order->update([
            'total' => $total,
        ]);

        // 5. Configurer Fedapay
        FedaPay::setApiKey('sk_test_r_8PWuWDyP5O5GWeqIZfc414');
        FedaPay::setEnvironment('sandbox');


        // 6. Créer une transaction Fedapay
        $transaction = Transaction::create([
            "description"   => "Paiement de la commande {$order->order_code}",
            "amount"        => $total,
            "currency"      => ["iso" => "XOF"],
            "callback_url"  => route('orders.callback', $order->id),
            "cancel_url"    => route('orders.checkout'),
            "customer" => [
                "phone_number" => [
                    "number"  => $request->phone,
                    "country" => "BJ"
                ]
            ]
        ]);

        // 7. Vider le panier de l'utilisateur
        $cart->items()->delete();

        // 8. Rediriger vers Fedapay
        return redirect($transaction->url);
    }


    // ✅ Callback après paiement
    public function callback($orderId, Request $request)
    {
        $order = Order::findOrFail($orderId);

        // Vérifier le statut du paiement via Fedapay API
        $transactionId = $request->input('id');
        $transaction = \Fedapay\Transaction::retrieve($transactionId);

        if ($transaction->status === 'approved') {
            $order->status = 'validée';
            $order->save();

            session()->forget('cart');

            return redirect()->route('orders.success', $order->id)
                ->with('success', 'Paiement validé, votre commande est enregistrée.');
        } else {
            $order->status = 'échouée';
            $order->save();
            return redirect()->route('orders.checkout')->with('error', 'Échec du paiement');
        }
    }

    public function success($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.success', compact('order'));
    }


    public function index()
    {
        $orders = Order::with('user')
            ->where('status', 'pending')
            ->latest()
            ->paginate(10);

        return view('admin.list_orders', compact('orders'));
    }
    public function validatedOrders()
    {
        $orders = Order::with('user')
            ->where('status', 'validated')
            ->latest()
            ->paginate(10);

        return view('admin.order_validated', compact('orders'));
    }
    public function deliveredOrders()
    {
        $orders = Order::with('user')
            ->where('status', 'delivered')
            ->latest()
            ->paginate(10);

        return view('admin.order_delivered', compact('orders'));
    }




        public function updateStatus($id, $status)
    {
        $validStatuses = ['validated', 'delivered', 'pending', 'paid'];

        if (!in_array($status, $validStatuses)) {
            return back()->with('error', 'Statut invalide.');
        }

        $order = Order::findOrFail($id);
        $order->update(['status' => $status]);

        return back()->with('success', "Commande mise à jour en $status");
    }



    public function myOrders()
{
    $orders = Order::where('user_id', auth()->id())
        ->with('items.produit')
        ->latest()
        ->paginate(10);
        

    return view('client.my-orders', compact('orders'));
}
public function hold()
{
    $orders = Order::with('items.produit')
        ->where('user_id', auth()->id())
        ->whereIn('status', ['validated', 'delivered']) // ✅ Filtre ici
        ->orderByDesc('created_at')
        ->paginate(10);
      
       

    return view('client.hold_orders', compact('orders'));
}


}


