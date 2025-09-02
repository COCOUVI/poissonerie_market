@extends('layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-white py-10">
    <div class="bg-white shadow-xl rounded-lg w-full max-w-md p-8">
        {{-- Logo --}}
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/PHOTO1.jpg') }}" alt="Logo de l'entreprise" class="h-16">
        </div>

        {{-- Titre --}}
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Créer un compte</h2>

        {{-- Formulaire --}}
        <form method="POST" action="{{ route('register.post') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Nom complet</label>
                <input type="text" id="name" name="name" required autofocus
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Adresse Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-600">Confirmer le mot de passe</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition">
                    S'inscrire
                </button>
            </div>

            <div class="text-sm text-center text-gray-500">
                Déjà inscrit ?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Connectez-vous ici</a>
            </div>
        </form>
    </div>
</div>
@endsection
