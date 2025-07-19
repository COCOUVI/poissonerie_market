@extends('layouts.app1')
@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/PHOTO1.jpg') }}" alt="Logo Poissonnerie"
                class="h-20 w-auto object-contain">
        </div>

        <!-- Titre -->
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Créer un administrateur</h2>

        <form action="#" method="POST" class="space-y-5">
            @csrf

            <!-- Nom -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet</label>
                <input type="text" id="name" name="name" required
                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Mot de passe -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Rôle (admin en hidden) -->
            <input type="hidden" name="role" value="admin">

            <!-- Bouton de soumission -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition">
                    Créer l’administrateur
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
