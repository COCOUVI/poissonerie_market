@extends('layouts.app')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 pt-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-8">Notre Catalogue</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Exemple de produit 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('images/produits/poisson1.jpg') }}" alt="Saumon frais" class="h-48 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <h2 class="text-xl font-semibold mb-2">Saumon Frais</h2>
                    <p class="text-gray-600 mb-4 flex-1">Poisson de mer issu de la pêche locale, riche en oméga-3.</p>
                    <p class="text-lg font-bold text-green-600 mb-4">2 500 FCFA/kg</p>
                    <div class="space-y-2">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Ajouter au panier</button>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded">Commander en ligne</button>
                        <a href="{{route('produits.details')}}" class="block w-full text-center bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 rounded">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- Exemple de produit 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('images/produits/crevettes.jpg') }}" alt="Crevettes roses" class="h-48 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <h2 class="text-xl font-semibold mb-2">Crevettes Roses</h2>
                    <p class="text-gray-600 mb-4 flex-1">Gambas fraîches, parfaites pour vos repas de fête.</p>
                    <p class="text-lg font-bold text-green-600 mb-4">4 500 FCFA/kg</p>
                    <div class="space-y-2">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Ajouter au panier</button>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded">Commander en ligne</button>
                        <a href="{{route('produits.details')}}" class="block w-full text-center bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 rounded">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- Exemple de produit 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                <img src="{{ asset('images/produits/poulet.jpg') }}" alt="Poulet fermier" class="h-48 w-full object-cover">
                <div class="p-4 flex-1 flex flex-col">
                    <h2 class="text-xl font-semibold mb-2">Poulet Fermier</h2>
                    <p class="text-gray-600 mb-4 flex-1">Viande locale, élevé en plein air, tendre et savoureuse.</p>
                    <p class="text-lg font-bold text-green-600 mb-4">3 000 FCFA/kg</p>
                    <div class="space-y-2">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Ajouter au panier</button>
                        <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded">Commander en ligne</button>
                        <a href="{{route('produits.details')}}" class="block w-full text-center bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 rounded">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- … Tu peux dupliquer ce bloc pour d’autres produits -->
        </div>
    </div>
</main>
@endsection
