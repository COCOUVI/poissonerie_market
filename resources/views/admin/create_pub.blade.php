@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Créer une publication</h2>

        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
            <!-- Champ Titre -->
            <div>
                <label for="titre" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                <input type="text" id="titre" name="titre" placeholder="Titre de la publication"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200">
            </div>

            <!-- Champ Contenu -->
            <div>
                <label for="contenu" class="block text-sm font-medium text-gray-700 mb-1">Contenu</label>
                <textarea id="contenu" name="contenu" rows="5"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
                    placeholder="Rédigez ici votre actualité, événement, ou message..."></textarea>
            </div>

            <!-- Image -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image (facultative)</label>
                <input type="file" id="image" name="image"
                    class="border border-gray-300 rounded px-3 py-2 w-full focus:ring focus:ring-blue-200">
            </div>

            <!-- Bouton soumettre -->
            <div class="text-right">
                <button type="submit"
                    class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors">
                    Publier
                </button>
            </div>
        </form>
    </div>
</main>
@endsection
