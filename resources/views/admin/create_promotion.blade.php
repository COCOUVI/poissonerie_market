@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen">
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Créer une promotion</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nom de la promotion -->
            <div class="mb-4">
                <label for="titre" class="block text-gray-700 font-medium mb-2">Titre de la promotion</label>
                <input type="text" id="titre" name="titre" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea id="description" name="description" rows="4" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Image de la promotion</label>
                <input type="file" id="image" name="image"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Date de début -->
            <div class="mb-4">
                <label for="date_debut" class="block text-gray-700 font-medium mb-2">Date de début</label>
                <input type="date" id="date_debut" name="date_debut" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Date de fin -->
            <div class="mb-6">
                <label for="date_fin" class="block text-gray-700 font-medium mb-2">Date de fin</label>
                <input type="date" id="date_fin" name="date_fin" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Bouton soumettre -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-300">
                    Enregistrer
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
