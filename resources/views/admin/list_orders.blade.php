@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <!-- Titre -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Liste des Commandes</h1>

        <!-- Tableau -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gray-100 text-left text-gray-600 text-sm uppercase">
                    <tr>
                        <th class="px-6 py-3">N°</th>
                        <th class="px-6 py-3">Client</th>
                        <th class="px-6 py-3">Produit</th>
                        <th class="px-6 py-3">Quantité</th>
                        <th class="px-6 py-3">Date</th>
                        <th class="px-6 py-3">Statut</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y divide-gray-200">
                    <!-- Exemple commande 1 -->
                    <tr>
                        <td class="px-6 py-4">#001</td>
                        <td class="px-6 py-4">Fatou Diallo</td>
                        <td class="px-6 py-4">Bar entier</td>
                        <td class="px-6 py-4">3 Kg</td>
                        <td class="px-6 py-4">19/07/2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-3 py-1 text-sm rounded-full bg-yellow-100 text-yellow-800">En attente</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-1">
                            <button class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">Valider</button>
                            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Refuser</button>
                            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">En attente</button>
                        </td>
                    </tr>

                    <!-- Exemple commande 2 -->
                    <tr>
                        <td class="px-6 py-4">#002</td>
                        <td class="px-6 py-4">Ali Ben</td>
                        <td class="px-6 py-4">Crevettes</td>
                        <td class="px-6 py-4">2 Kg</td>
                        <td class="px-6 py-4">18/07/2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-3 py-1 text-sm rounded-full bg-green-100 text-green-800">Validée</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-1">
                            <button class="bg-gray-500 text-white px-3 py-1 rounded text-sm cursor-not-allowed opacity-50">Validée</button>
                        </td>
                    </tr>

                    <!-- Exemple commande 3 -->
                    <tr>
                        <td class="px-6 py-4">#003</td>
                        <td class="px-6 py-4">Kankoue Dev</td>
                        <td class="px-6 py-4">Thon découpé</td>
                        <td class="px-6 py-4">5 Kg</td>
                        <td class="px-6 py-4">17/07/2025</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-3 py-1 text-sm rounded-full bg-red-100 text-red-800">Refusée</span>
                        </td>
                        <td class="px-6 py-4 text-center space-x-1">
                            <button class="bg-gray-500 text-white px-3 py-1 rounded text-sm cursor-not-allowed opacity-50">Refusée</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
