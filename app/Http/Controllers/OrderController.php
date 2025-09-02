<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Fedapay\FedaPay;
use Fedapay\Transaction;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Page de checkout (formulaire avec téléphone + bouton payer)
     */
    public function checkout()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();
        $total = $cartItems->sum(fn($item) => $item->quantity * $item->product->price);

        return view('order.checkout', compact('cartItems', 'total'));
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

        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Votre panier est vide');
        }

        // 1. Créer la commande
        $order = Order::create([
            'user_id' => Auth::id(),
            'phone'   => $request->phone,
            'status'  => 'en attente',
            'code'    => strtoupper(uniqid('CMD-')),
        ]);

        $total = 0;
        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $productId,
                'quantity'   => $item['quantity'],
                'price'      => $item['price'],
            ]);
            $total += $item['price'] * $item['quantity'];
        }

        // 2. Config Fedapay
        FedaPay::setApiKey(config('fedapay.secret_key'));
        FedaPay::setEnvironment(config('fedapay.environment'));

        // 3. Créer une transaction
        $transaction = Transaction::create([
            "description" => "Paiement de la commande {$order->code}",
            "amount"      => $total,
            "currency"    => ["iso" => "XOF"],
            "callback_url" => route('orders.callback', $order->id),
            "cancel_url"   => route('orders.checkout'),
            "customer" => [
                "phone_number" => [
                    "number" => $request->phone,
                    "country" => "BJ"
                ]
            ]
        ]);

        // 4. Rediriger vers la page de paiement
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
        $orders = Order::with('user')->latest()->get();
        return view('admin.list_orders', compact('orders'));
    }

    public function updateStatus($id, $status)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $status]);

        return back()->with('success', "Commande mise à jour en $status");
    }


    public function myOrders()
{
    $orders = Order::where('user_id', auth()->id())
        ->with('items.product')
        ->latest()
        ->get();

    return view('orders.my-orders', compact('orders'));
}

}


