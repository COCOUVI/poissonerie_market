<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function ShowProduct(){
     
         return view('home.produits');
    }
    public function ShowCart(){
       return view("home.cart");

    }
    public function ShowDetails(){
        return view("home.details_product");
    }
}
