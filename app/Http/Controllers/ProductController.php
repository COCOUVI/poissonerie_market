<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;


class ProductController extends Controller
{
    //
    public function index(){
     
         return view('client.produits');
    }
    public function ShowCart(){
       return view("client.cart");

    }
    public function ShowDetails(){
        return view("home.details_product");
    }
        // Afficher tous les produits (côté client)
    public function showAllProducts()
    {
        $produits = Produit::with('category')->latest()->get();
        return view('client.produits', compact('produits'));
    }

}
