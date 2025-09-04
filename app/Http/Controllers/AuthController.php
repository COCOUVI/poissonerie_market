<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('login');
    }

    // Gère la tentative de connexion
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);

            if ($user->role === 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('Espace_client');
            }
        }

        return redirect()->back()->with('error', 'Identifiants incorrects.');
    }

    // Déconnecte l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Déconnecté avec succès.');
    }

    // Affiche le formulaire d'inscription client
    public function showRegisterForm()
    {
        return view('register');
    }

    // Gère l'inscription d'un client
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'client',
        ]);

        Auth::login($user);

        return redirect()->route('')->with('success', 'Compte créé avec succès.');
    }

    public function ShowClientSpace(){

        return view("client.space_client");
    }

    public function index() {
        return view("admin.index");
    }

    // Formulaire pour ajouter un admin (accessible depuis le backoffice)
    public function showAdminCreationForm()
    {
        return view('admin.create_admin');
    }

    // Enregistrement d'un nouvel admin (par un admin connecté)
    public function createAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'admin',
        ]);

        return redirect()->route('admin.create')->with('success', 'Admin ajouté avec succès.');
    }
}


