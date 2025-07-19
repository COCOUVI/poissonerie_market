<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index() {
        return view("admin.index");
    }
    public function ShowProductPage(){
        return view('admin.add_product');
    }
    public function  ShowEditProductPage(){
        return view("admin.edit_product");
        
    }
    public function ShowlistProduct(){

        return view("admin.list_product");
    }
    public function CreatePromPage(){
        return view("admin.create_promotion");
    }
    public function ShowlistPromotion(){
        return view("admin.list_promo");
    }
    public function EditPagePromo(){
        return view("admin.edit_promo");
    }
    public function CreateNewsPage(){
      
        return view("admin.create_pub");
    }
    public function ShowNews(){
        return view("admin.list_news");

    }
    public function CreateAdmin(){
        return view("admin.create_admin");
    }
    public function ShowUsers(){
        return view("admin.list_user");
    }
    public function ShowOrders(){
        return view("admin.list_orders");
    }
    public function ShowMessages(){
        return view("admin.messages_commments");
    }
}
