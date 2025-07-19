@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <!-- Titre -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Liste des utilisateurs</h1>

        <!-- Tableau des utilisateurs -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gray-100 text-left text-gray-600 text-sm uppercase">
                    <tr>
                        <th class="px-6 py-3">Nom</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Rôle</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y divide-gray-200">
                    <!-- Exemple utilisateur 1 -->
                    <tr>
                        <td class="px-6 py-4">Kankoue Dev</td>
                        <td class="px-6 py-4">kankoue@example.com</td>
                        <td class="px-6 py-4">Admin</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">Modifier</button>
                            <button class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">Supprimer</button>
                        </td>
                    </tr>
                    <!-- Exemple utilisateur 2 -->
                    <tr>
                        <td class="px-6 py-4">Fatou Diallo</td>
                        <td class="px-6 py-4">fatou@example.com</td>
                        <td class="px-6 py-4">Caissier</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">Modifier</button>
                            <button class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">Supprimer</button>
                        </td>
                    </tr>
                    <!-- Exemple utilisateur 3 -->
                    <tr>
                        <td class="px-6 py-4">Ali Ben</td>
                        <td class="px-6 py-4">ali.ben@example.com</td>
                        <td class="px-6 py-4">Vendeur</td>
                        <td class="px-6 py-4 text-center space-x-2">
                            <button class="px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">Modifier</button>
                            <button class="px-3 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600">Supprimer</button>
                        </td>
                    </tr>
                    <!-- Ajoute ici plus d'exemples si besoin -->
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
