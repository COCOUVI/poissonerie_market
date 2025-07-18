@extends('layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-white py-10">
    <div class="bg-white shadow-xl rounded-lg w-full max-w-md p-8">
        {{-- Logo --}}
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/PHOTO1.jpg') }}" alt="Logo de l'entreprise" class="h-16">
        </div>

        {{-- Titre --}}
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Connexion</h2>

        {{-- Formulaire --}}
        <form method="POST" action="" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Adresse Email</label>
                <input type="email" id="email" name="email" required autofocus
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-300 focus:outline-none">
            </div>

            <div class="flex items-center justify-between">
                <label class="inline-flex items-center text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="form-checkbox h-4 w-4 text-blue-600">
                    <span class="ml-2">Se souvenir de moi</span>
                </label>

                <a href="" class="text-sm text-blue-600 hover:underline">
                    Mot de passe oublié ?
                </a>
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-blue-700 transition">
                    Se connecter
                </button>
            </div>

            <div class="text-sm text-center text-gray-500">
                Pas encore de compte ?
                <a href="/register" class="text-blue-600 hover:underline">Inscrivez-vous</a>
            </div>
        </form>
    </div>
</div>
@endsection
