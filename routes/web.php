<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register',[RegisterController::class,"RegisterPage"]);
Route::get('/login',[AuthController::class,"LoginPage"]);
Route::get('/admin',function (){
      return view("admin.index");

});
