@extends('layouts.app1')

@section('content')
    <main class="p-6 min-h-screen">
        <div class="container mx-auto px-4 pt-24">
            <h1 class="text-2xl font-bold mb-6">Catalogue Produits</h1>

            <table class="w-full bg-white shadow rounded-lg overflow-hidden">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="text-left p-3">Image</th>
                        <th class="text-left p-3">Nom</th>
                        <th class="text-left p-3">Catégorie</th>
                        <th class="text-left p-3">Prix</th>
                        <th class="text-left p-3">Quantité</th>
                        <th class="text-left p-3">Niveau de stock</th>
                        <th class="text-left p-3">Description</th>
                        <th class="text-center p-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800">
                    <!-- Produit 1 -->
                    <tr class="border-t">
                        <td class="p-3">
                            <img src="{{ asset('images/produits/bar_poisson.jpg') }}" alt="Bar"
                                class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="p-3">Bar Frais</td>
                        <td class="p-3">Poisson</td>
                        <td class="p-3">2 500 FCFA/kg</td>
                        <td class="p-3">25 kg</td>
                        <td class="p-3">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                En stock
                            </span>
                        </td>
                        <td class="p-3 text-sm">Poisson de mer frais, parfait pour grillade ou friture.</td>
                        <td class="p-3 text-center">
                            <div class="flex justify-center items-center gap-2">
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                    Modifier
                                </button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Supprimer
                                </button>
                            </div>
                        </td>

                    </tr>

                    <!-- Produit 2 -->
                    <tr class="border-t">
                        <td class="p-3">
                            <img src="{{ asset('images/produits/poulet.jpg') }}" alt="Poulet"
                                class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="p-3">Poulet Fermier</td>
                        <td class="p-3">Viande</td>
                        <td class="p-3">3 000 FCFA/kg</td>
                        <td class="p-3">10 kg</td>
                        <td class="p-3">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Faible stock
                            </span>
                        </td>
                        <td class="p-3 text-sm">Poulet élevé en plein air, chair tendre et savoureuse.</td>
                        <td class="p-3 text-center">
                            <div class="flex justify-center items-center gap-2">
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                    Modifier
                                </button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Supprimer
                                </button>
                            </div>
                        </td>

                    </tr>

                    <!-- Produit 3 -->
                    <tr class="border-t">
                        <td class="p-3">
                            <img src="{{ asset('images/produits/crevettes.jpg') }}" alt="Crevettes"
                                class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="p-3">Crevettes Roses</td>
                        <td class="p-3">Fruits de mer</td>
                        <td class="p-3">4 500 FCFA/kg</td>
                        <td class="p-3">0 kg</td>
                        <td class="p-3">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                Rupture
                            </span>
                        </td>
                        <td class="p-3 text-sm">Crevettes fraîches pêchées du jour, idéales pour les sautés.</td>
                        <td class="p-3 text-center">
                            <div class="flex justify-center items-center gap-2">
                                <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                    Modifier
                                </button>
                                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Supprimer
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
