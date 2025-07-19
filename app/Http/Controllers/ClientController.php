<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function ShowClientSpace(){

        return view("client.space_client");
    }
}
