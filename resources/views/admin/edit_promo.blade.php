@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Modifier la promotion</h2>

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Champ Titre -->
            <div>
                <label for="titre" class="block text-sm font-medium text-gray-700 mb-1">Titre de la promotion</label>
                <input type="text" id="titre" name="titre" value="Promo Saumon"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
            </div>

            <!-- Champ Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">-25% sur le filet de saumon frais toute la semaine.</textarea>
            </div>

            <!-- Dates -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="date_debut" class="block text-sm font-medium text-gray-700 mb-1">Date de début</label>
                    <input type="date" id="date_debut" name="date_debut" value="2025-07-20"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                </div>
                <div>
                    <label for="date_fin" class="block text-sm font-medium text-gray-700 mb-1">Date de fin</label>
                    <input type="date" id="date_fin" name="date_fin" value="2025-07-26"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-green-200">
                </div>
            </div>

            <!-- Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image actuelle</label>
                <div class="flex items-center space-x-4 mb-2">
                    <img src="/images/promos/saumon.png" alt="Image actuelle" class="w-20 h-20 object-cover rounded">
                    <input type="file" id="image" name="image"
                        class="border border-gray-300 rounded px-3 py-2 w-full focus:ring focus:ring-green-200">
                </div>
            </div>

            <!-- Bouton soumettre -->
            <div class="text-right">
                <button type="submit"
                    class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition-colors">
                    Enregistrer les modifications
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
