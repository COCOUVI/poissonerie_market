@extends('layouts.app1')
@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 pt-24">
        <div class="bg-white shadow-lg rounded-xl p-6 space-y-6">

            <h1 class="text-2xl font-bold text-gray-800 mb-4">Paramètres Administrateur</h1>
            <p class="text-gray-600 mb-6">Gérez les options de sécurité et de sauvegarde du site.</p>

            <!-- Section Sécurité -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h2 class="text-xl font-semibold text-gray-700 mb-3">Sécurité</h2>
                <div class="flex items-center justify-between mb-3">
                    <span class="text-gray-600">Activer l’authentification à deux facteurs</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">
                        Activer
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Changer le mot de passe administrateur</span>
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600 text-sm">
                        Modifier
                    </button>
                </div>
            </div>

            <!-- Section Sauvegarde -->
            <div class="border border-gray-200 rounded-lg p-4">
                <h2 class="text-xl font-semibold text-gray-700 mb-3">Sauvegarde</h2>
                <div class="flex items-center justify-between mb-3">
                    <span class="text-gray-600">Effectuer une sauvegarde manuelle</span>
                    <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm">
                        Sauvegarder maintenant
                    </button>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-gray-600">Dernière sauvegarde : <strong>12 juillet 2025, 10h45</strong></span>
                    <button class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 text-sm">
                        Télécharger
                    </button>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
