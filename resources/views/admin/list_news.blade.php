@extends('layouts.app1')
@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-xl shadow">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Liste des publications</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 text-left">Image</th>
                        <th class="px-6 py-3 text-left">Titre</th>
                        <th class="px-6 py-3 text-left">Contenu</th>
                        <th class="px-6 py-3 text-left">Date</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-700">
                    <!-- Exemple 1 -->
                    <tr>
                        <td class="px-6 py-4">
                            <img src="https://via.placeholder.com/80" alt="image" class="w-20 h-14 object-cover rounded">
                        </td>
                        <td class="px-6 py-4 font-medium">Offre spéciale du week-end</td>
                        <td class="px-6 py-4 line-clamp-2 max-w-sm">Découvrez nos réductions exceptionnelles sur les fruits de mer...</td>
                        <td class="px-6 py-4">19/07/2025</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="#"
                                class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded hover:bg-yellow-200 transition text-xs">Modifier</a>
                            <button
                                class="px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 transition text-xs">Supprimer</button>
                        </td>
                    </tr>

                    <!-- Exemple 2 -->
                    <tr>
                        <td class="px-6 py-4">
                            <img src="https://via.placeholder.com/80" alt="image" class="w-20 h-14 object-cover rounded">
                        </td>
                        <td class="px-6 py-4 font-medium">Nouveaux arrivages de poissons</td>
                        <td class="px-6 py-4 line-clamp-2 max-w-sm">Des produits frais disponibles dès ce matin. Venez vite en boutique...</td>
                        <td class="px-6 py-4">18/07/2025</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="#"
                                class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded hover:bg-yellow-200 transition text-xs">Modifier</a>
                            <button
                                class="px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 transition text-xs">Supprimer</button>
                        </td>
                    </tr>

                    <!-- Ajouter d'autres exemples ici -->
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
