@extends('layouts.app') 
@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row gap-6">
        <!-- Image du produit -->
        <div class="flex-shrink-0">
            <img src="https://via.placeholder.com/300x200" alt="Poisson Tilapia" class="w-full md:w-80 h-auto object-cover rounded">
        </div>

        <!-- Détails du produit -->
        <div class="flex-1">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Tilapia Frais</h2>
            <p class="text-gray-600 mb-4">Poisson élevé localement, très frais, idéal pour grillade ou sauce. Disponible en plusieurs tailles selon votre besoin.</p>

            <div class="mb-4">
                <span class="text-xl text-blue-600 font-semibold">2 000 FCFA / kg</span>
            </div>

            <form class="flex flex-col gap-4 mt-4">
                <div>
                    <label class="block text-sm text-gray-700 mb-1" for="quantite">Quantité souhaitée (en kg)</label>
                    <input type="number" id="quantite" name="quantite" value="1" min="1"
                        class="w-24 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                    🛒 Ajouter au panier
                </button>
            </form>

            <div class="mt-6 text-sm text-gray-500">
                Livraison disponible sous 24h dans les zones de Cotonou et Calavi.
            </div>
        </div>
    </div>
</main>
@endsection
