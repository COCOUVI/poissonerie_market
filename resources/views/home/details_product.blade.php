@extends('layouts.app')
@section('content')
    <main class="p-6 min-h-screen bg-gray-50">
        <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row gap-6">
            <!-- Image du produit -->
            <div class="flex-shrink-0">
                <img src="https://via.placeholder.com/300x200" alt="Poisson Tilapia"
                    class="w-full md:w-80 h-auto object-cover rounded">
            </div>

            <!-- Détails du produit -->
            <div class="flex-1">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Tilapia Frais</h2>
                <p class="text-gray-600 mb-4">Poisson élevé localement, très frais, idéal pour grillade ou sauce. Disponible
                    en plusieurs tailles selon votre besoin.</p>

                <div class="mb-4">
                    <span class="text-xl text-blue-600 font-semibold">2 000 FCFA / kg</span>
                </div>

                <form class="flex flex-col gap-4 mt-4">
                    <div>
                        <label class="block text-sm text-gray-700 mb-1" for="quantite">Quantité souhaitée (en kg)</label>
                        <input type="number" id="quantite" name="quantite" value="1" min="1"
                            class="w-24 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                    </div>

                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
                        🛒 Ajouter au panier
                    </button>
                </form>

                <div class="mt-6 text-sm text-gray-500">
                    Livraison disponible sous 24h dans les zones de Cotonou et Calavi.
                </div>
            </div>
        </div>
        <!-- Avis Clients -->
        <div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold mb-4 text-gray-800">Avis des clients</h3>

            <!-- Formulaire pour laisser un avis -->
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="note" class="block text-sm font-medium text-gray-700">Note (1 à 5)</label>
                    <select id="note" name="note" class="w-20 mt-1 p-2 border rounded">
                        <option value="5">⭐️⭐️⭐️⭐️⭐️</option>
                        <option value="4">⭐️⭐️⭐️⭐️</option>
                        <option value="3">⭐️⭐️⭐️</option>
                        <option value="2">⭐️⭐️</option>
                        <option value="1">⭐️</option>
                    </select>
                </div>

                <div>
                    <label for="commentaire" class="block text-sm font-medium text-gray-700">Commentaire</label>
                    <textarea id="commentaire" name="commentaire" rows="3" class="w-full mt-1 p-2 border rounded"
                        placeholder="Votre avis sur le produit..."></textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Publier mon avis
                </button>
            </form>

            <!-- Liste des avis déjà publiés -->
            <div class="mt-6 space-y-4">
                <div class="border-t pt-4">
                    <p class="text-sm text-gray-800"><strong>Marie D.</strong> - ⭐️⭐️⭐️⭐️⭐️</p>
                    <p class="text-gray-600">Poisson très frais, livraison rapide. Je recommande !</p>
                </div>
                <div class="border-t pt-4">
                    <p class="text-sm text-gray-800"><strong>Jean P.</strong> - ⭐️⭐️⭐️⭐️</p>
                    <p class="text-gray-600">Bon produit mais un peu petit.</p>
                </div>
            </div>
        </div>

    </main>
@endsection
