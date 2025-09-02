<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Models\Produit;

Route::get('/', function () {
    $produits = Produit::with('category')->get(); // récupère tous les produits avec leur catégorie
    return view('welcome', compact('produits'));
});

//ROUTE pour la liste des produits
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
    Route::get('/listes-categorie',[AdminController::class,"ShowlistProduct"])->name("admin.categories");
    Route::get('/creer-promotions',[AdminController::class,"CreatePromPage"])->name("promotions.create");
    Route::get('/listes-promotions',[AdminController::class,"ShowlistPromotion"])->name("admin.promotions");
    Route::get('/editer-promotion',[AdminController::class,"EditPagePromo"])->name("edit.page.promotion");
    Route::get('/publications',[AdminController::class,"CreateNewsPage"])->name("news.create");
    Route::get('/liste-publication',[AdminController::class,"ShowNews"])->name("admin.news");
    
    Route::get('/list-utilisateurs',[AdminController::class,"ShowUsers"])->name("admin.users");
    Route::get("/list-commandes",[AdminController::class,"ShowOrders"])->name("admin.orders");
    Route::get('/repondre-messages',[AdminController::class,"ShowMessages"])->name("admin.messages");
    Route::get('/livraisons-page',[AdminController::class,"LivraisonPage"])->name('admin.delivery');
    Route::get('/parametres',[AdminController::class,"ShowSettings"])->name('admin.settings');
});



//route pour le clinet
Route::prefix('espace-client')->group(function() {
 Route::get('/CLIENT', [ClientController::class, "ShowClientSpace"])->name("client.espace_client");;   
 Route::get('/commandes-en_cours',[ClientController::class,"Hold_oders"])->name("commandes.en_cours");
 Route::get('/historiques-commande',[ClientController::class,"Show_historical"])->name('commandes.historique');
});



// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Inscription client
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/space_client', [AuthController::class, 'ShowClientSpace'])->name('Espace_client')->middleware('auth');
Route::get('/ADMIN', [AuthController::class,"index"])->name('admin.index');

// Ajout d’admin par un admin (protégé)
Route::middleware(['auth', 'admin'])->group(function () {
    });
Route::get('/admin/ajouter-admin', [AuthController::class, 'showAdminCreationForm'])->name('admin.create');
    Route::post('/admin/ajouter-admin', [AuthController::class, 'createAdmin'])->name('admin.store');

// Gestion des catégories
Route::get('/admin/categories', [AdminController::class, 'listCategories'])->name('admin.listCategories');
Route::get('/admin/categories/add', [AdminController::class, 'createCategory'])->name('admin.createCategory');
Route::post('/admin/categories/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');
Route::delete('/admin/categories/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
Route::put('/admin/categories/{id}', [AdminController::class, 'updateCategory'])->name('admin.updateCategory');


// Produits
Route::get('/admin/products', [AdminController::class, 'listProducts'])->name('admin.listProducts');
Route::post('/admin/products', [AdminController::class, 'storeProduct'])->name('admin.storeProduct');
Route::put('/admin/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.updateProduct');
Route::delete('/admin/products/{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
// Route pour afficher tous les produits (client)
Route::get('/products', [App\Http\Controllers\ProductController::class, 'showAllProducts'])->name('product.all');



use App\Http\Controllers\CartController;


use App\Http\Controllers\OrderController;




Route::middleware('auth')->group(function () {
    Route::post('/cart/add/{produit_id}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
});


Route::middleware('auth')->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('orders.checkout');
    Route::post('/checkout', [OrderController::class, 'processCheckout'])->name('orders.processCheckout');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
});


Route::get('/checkout', [OrderController::class, 'checkout'])->name('orders.checkout');
Route::get('/list-orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orders/{id}/status/{status}', [OrderController::class, 'updateStatus'])
    ->name('admin.orders.updateStatus');
Route::get('/admin/orders/validated', [OrderController::class, 'validatedOrders'])->name('admin.orders.validated');
Route::get('/admin/orders/delivered', [OrderController::class, 'deliveredOrders'])->name('admin.orders.delivered');
Route::post('/checkout', [OrderController::class, 'processCheckout'])->name('orders.processCheckout');
Route::get('/orders/callback/{id}', [OrderController::class, 'callback'])->name('orders.callback');
Route::get('/orders/success/{id}', [OrderController::class, 'success'])->name('orders.success');
Route::middleware(['auth'])->group(function () {
    Route::get('/mes-commandes', [OrderController::class, 'myOrders'])->name('orders.my');
    Route::get('/hold-commandes', [OrderController::class, 'hold'])->name('orders.hold');

});

Route::get('/cart/count', [CartController::class, 'cartCount'])->name('cart.count');

Route::get('/listadmins', [AdminController::class, 'listAdmins'])->name('admin.listAdmins');
Route::get('/listclients', [AdminController::class, 'listClients'])->name('admin.listClients');
Route::delete('/admin/users/{user}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');


