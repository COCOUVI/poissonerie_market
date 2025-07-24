<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function ShowClientSpace(){

        return view("client.space_client");
    }

    public function Hold_oders(){
       
        return view("client.hold_orders");
    }
    public function Show_historical(){
     
        return view('client.historiques');

    }
}
