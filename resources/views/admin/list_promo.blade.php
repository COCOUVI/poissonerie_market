@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Liste des promotions</h2>

        <table class="w-full text-left border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-sm text-gray-600 uppercase tracking-wider">
                <tr>
                    <th class="px-4 py-3">Image</th>
                    <th class="px-4 py-3">Titre</th>
                    <th class="px-4 py-3">Description</th>
                    <th class="px-4 py-3">Date de début</th>
                    <th class="px-4 py-3">Date de fin</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="border-t border-gray-200 hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <img src="/images/promos/saumon.png" alt="Promo Saumon"
                            class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-4 py-3 font-semibold">Promo Saumon</td>
                    <td class="px-4 py-3">-25% sur le filet de saumon frais toute la semaine.</td>
                    <td class="px-4 py-3">20/07/2025</td>
                    <td class="px-4 py-3">26/07/2025</td>
                    <td class="px-4 py-3 text-center space-x-2">
                        <a href="#" class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 text-sm">
                            <i class="fas fa-edit mr-1"></i> Modifier
                        </a>
                        <a href="#" onclick="return confirm('Supprimer cette promotion ?')"
                            class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-sm">
                            <i class="fas fa-trash-alt mr-1"></i> Supprimer
                        </a>
                    </td>
                </tr>

                <tr class="border-t border-gray-200 hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <img src="/images/promos/crevette.png" alt="Promo Crevettes"
                            class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-4 py-3 font-semibold">Crevettes Royales</td>
                    <td class="px-4 py-3">1kg acheté = 500g offerts jusqu’à épuisement du stock.</td>
                    <td class="px-4 py-3">18/07/2025</td>
                    <td class="px-4 py-3">23/07/2025</td>
                    <td class="px-4 py-3 text-center space-x-2">
                        <a href="#" class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 text-sm">
                            <i class="fas fa-edit mr-1"></i> Modifier
                        </a>
                        <a href="#" onclick="return confirm('Supprimer cette promotion ?')"
                            class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-sm">
                            <i class="fas fa-trash-alt mr-1"></i> Supprimer
                        </a>
                    </td>
                </tr>

                <tr class="border-t border-gray-200 hover:bg-gray-50">
                    <td class="px-4 py-3">
                        <img src="/images/promos/thon.png" alt="Promo Thon"
                            class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-4 py-3 font-semibold">Demi thon entier</td>
                    <td class="px-4 py-3">Offre spéciale marché : demi thon à -30% !</td>
                    <td class="px-4 py-3">19/07/2025</td>
                    <td class="px-4 py-3">25/07/2025</td>
                    <td class="px-4 py-3 text-center space-x-2">
                        <a href="#" class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded hover:bg-blue-200 text-sm">
                            <i class="fas fa-edit mr-1"></i> Modifier
                        </a>
                        <a href="#" onclick="return confirm('Supprimer cette promotion ?')"
                            class="inline-block px-3 py-1 bg-red-100 text-red-700 rounded hover:bg-red-200 text-sm">
                            <i class="fas fa-trash-alt mr-1"></i> Supprimer
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection
