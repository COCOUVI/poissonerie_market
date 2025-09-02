<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Produit;
use Illuminate\Support\Facades\Storage;
   use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
 

    public function index()
    {
        $todayStart = Carbon::now()->startOfDay();
        $todayEnd = Carbon::now()->endOfDay();

        $salesToday = Order::whereBetween('created_at', [$todayStart, $todayEnd])->sum('total');

        $pendingOrdersCount = Order::where('status', 'pending')->count();
        $validatedOrdersCount = Order::where('status', 'validated')->count();
        $deliveredOrdersCount = Order::where('status', 'delivered')->count();

        $newClientsCount = User::whereBetween('created_at', [$todayStart, $todayEnd])->count();

        $recentOrders = Order::with('user')->latest()->take(5)->get();
        $recentProducts = Produit::latest()->take(5)->get();

        return view("admin.index", compact(
            'salesToday',
            'pendingOrdersCount',
            'validatedOrdersCount',
            'deliveredOrdersCount',
            'newClientsCount',
            'recentOrders',
            'recentProducts'
        ));
    }
 

    public function listAdmins()
{
    $admins = User::where('role', 'admin')->latest()->paginate(10);
    return view('admin.listadmins', ['users' => $admins, 'title' => 'Administrateurs']);
}

public function listClients()
{
    $clients = User::where('role', 'client')->latest()->paginate(10);
    return view('admin.listclients', ['users' => $clients, 'title' => 'Clients']);
}

    public function destroyUser(User $user)
    {
        // Optionnel : tu peux interdire la suppression d'un admin depuis la liste clients, etc.
        $user->delete();

        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès.');
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
    public function LivraisonPage(){
        return view('admin.livraison');
    }
    public function ShowSettings(){
        return view("admin.settings");
    }
    //Afficher la liste des catégories
    public function listCategories()
    {
        $categories = Category::all();
        return view('admin.list_cat', compact('categories'));
    }

    // Afficher le formulaire d’ajout
    public function createCategory()
    {
        return view('admin.add_cat');
    }

    // Enregistrer une catégorie
    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();

        return redirect()->route('admin.listCategories')->with('success', 'Catégorie ajoutée avec succès ✅');
    }
        // Modifier une catégorie
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
            'description' => 'nullable|string|max:500',
        ]);

        $cat = Category::findOrFail($id);
        $cat->name = $request->name;
        $cat->description = $request->description;
        $cat->save();

        return redirect()->route('admin.listCategories')->with('success', 'Catégorie modifiée avec succès ✅');
    }


    // Supprimer une catégorie
    public function deleteCategory($id)
    {
        $cat = Category::findOrFail($id);
        $cat->delete();

        return redirect()->route('admin.listCategories')->with('success', 'Catégorie supprimée avec succès 🗑️');
    }

    // ✅ Liste des produits
    public function listProducts()
    {
        $produits = Produit::with('category')->get();
        $categories = Category::all();
        

        return view('admin.list_product', compact('produits', 'categories'));
    }

    // ✅ Ajout d’un produit
    public function storeProduct(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'categorie_id' => 'required|exists:categories,id',
            'prix' => 'required|numeric|min:0',
            'quantite' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('produits', 'public');
        }

        Produit::create([
            'name' => $request->nom,
            'category_id' => $request->categorie_id,
            'price' => $request->prix,
            'stock' => $request->quantite,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Produit ajouté avec succès ✅');
    }

    // ✅ Modification d’un produit
    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'categorie_id' => 'required|exists:categories,id',
            'prix' => 'required|numeric|min:0',
            'quantite' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $produit = Produit::findOrFail($id);

        $imagePath = $produit->image;
        if ($request->hasFile('image')) {
            // supprimer l’ancienne image si existe
            if ($produit->image) {
                Storage::disk('public')->delete($produit->image);
            }
            $imagePath = $request->file('image')->store('produits', 'public');
        }

        $produit->update([
            'name' => $request->nom,
            'category_id' => $request->categorie_id,
            'price' => $request->prix,
            'stock' => $request->quantite,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Produit modifié avec succès ✏️');
    }

    // ✅ Suppression d’un produit
    public function deleteProduct($id)
    {
        $produit = Produit::findOrFail($id);

        // Supprimer l’image associée si existe
        if ($produit->image) {
            Storage::disk('public')->delete($produit->image);
        }

        $produit->delete();

        return redirect()->back()->with('success', 'Produit supprimé avec succès 🗑️');
    }

}
