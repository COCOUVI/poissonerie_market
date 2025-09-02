<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    // Ajouter au panier
    public function addToCart(Request $request, $produit_id)
    {
        $produit = Produit::findOrFail($produit_id);

        // Récupérer ou créer un panier (lié au user si connecté)
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

        // Vérifier si l’article existe déjà
        $item = $cart->items()->where('produit_id', $produit_id)->first();

        if ($item) {
            $item->quantity += 1;
            $item->save();
        } else {
            $cart->items()->create([
                'produit_id' => $produit->id,
                'quantity' => 1,
                'price' => $produit->price, // Assure-toi que ta table produits a un champ prix
            ]);
        }

        
        return redirect()->route('product.all')
                     ->with('success', 'Produit ajouté au panier avec succès ✅');

    }

    // Afficher panier
    // Afficher panier
    public function showCart()
    {
        $cart = Cart::with('items.produit')->where('user_id', auth()->id())->first();

        $total = 0;

        if ($cart && $cart->items->count() > 0) {
            $total = $cart->items->sum(function ($item) {
                return $item->price * $item->quantity;
            });
        }

        return view('client.cart', compact('cart', 'total'));
    }


    // Supprimer un produit du panier
    public function removeFromCart($item_id)
    {
        $item = CartItem::findOrFail($item_id);
        $item->delete();

        return redirect()->route('cart.show')->with('success', 'Produit retiré du panier');
    }

    // Vider le panier
    public function clearCart()
    {
        $cart = Cart::where('user_id', auth()->id())->first();
        if ($cart) {
            $cart->items()->delete();
        }
        return redirect()->route('cart.show')->with('success', 'Panier vidé');
    }

    // Compteur panier (pour header)
    public function cartCount()
    {
        $cart = Cart::where('user_id', auth()->id())->first();
        return $cart ? $cart->items()->sum('quantity') : 0;
    }
   



  

}
