<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//ROUTE pour la liste des produits
Route::get('/listes-produits',[ProductController::class,"ShowProduct"])->name("product.all");
//route pour le panier
Route::get('/panier',[ProductController::class,"ShowCart"])->name("home.cart");
Route::get('/details-produits',[ProductController::class,"ShowDetails"])->name('produits.details');
//route pour l'authentification
Route::get('/register', [RegisterController::class, "RegisterPage"]);
Route::get('/login', [AuthController::class, "LoginPage"]);
//route concernant admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,"index"])->name('admin.dashboard');
    Route::get('/ajouter-produits',[AdminController::class,"ShowProductPage"]);
    Route::get('/modifier-produit',[AdminController::class,"ShowEditProductPage"]);
    Route::get('/listes-produits',[AdminController::class,"ShowlistProduct"])->name("admin.catalogue");
    Route::get('/creer-promotions',[AdminController::class,"CreatePromPage"])->name("promotions.create");
    Route::get('/listes-promotions',[AdminController::class,"ShowlistPromotion"])->name("admin.promotions");
    Route::get('/editer-promotion',[AdminController::class,"EditPagePromo"])->name("edit.page.promotion");
    Route::get('/publications',[AdminController::class,"CreateNewsPage"])->name("news.create");
    Route::get('/liste-publication',[AdminController::class,"ShowNews"])->name("admin.news");
    Route::get('/ajouter-admin',[AdminController::class,"CreateAdmin"])->name("admin.admins");
    Route::get('/list-utilisateurs',[AdminController::class,"ShowUsers"])->name("admin.users");
    Route::get("/list-commandes",[AdminController::class,"ShowOrders"])->name("admin.orders");
    Route::get('/repondre-messages',[AdminController::class,"ShowMessages"])->name("admin.messages");
    Route::get('/livraisons-page',[AdminController::class,"LivraisonPage"])->name('admin.delivery');
    Route::get('/parametres',[AdminController::class,"ShowSettings"])->name('admin.settings');
});



//route pour le clinet
Route::prefix('espace-client')->group(function() {
 Route::get('/', [ClientController::class, "ShowClientSpace"]);   
 Route::get('/commandes-en_cours',[ClientController::class,"Hold_oders"])->name("commandes.en_cours");
 Route::get('/historiques-commande',[ClientController::class,"Show_historical"])->name('commandes.historique');
});

