@extends('layouts.app1')
@section('content')
    <main class="p-6 min-h-screen">
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">

            <!-- Logo Poissonnerie -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/PHOTO1.jpg') }}" alt="Logo Poissonnerie" class="h-24 object-contain">
            </div>

            <h2 class="text-2xl font-bold text-center mb-6 text-blue-800">Ajouter un nouveau produit</h2>

            @if (session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Nom -->
                <div class="mb-4">
                    <label for="nom" class="block text-gray-700 font-semibold mb-1">Nom du produit</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom') }}"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300">
                    @error('nom')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Prix -->
                <div class="mb-4">
                    <label for="prix" class="block text-gray-700 font-semibold mb-1">Prix (FCFA)</label>
                    <input type="number" name="prix" id="prix" value="{{ old('prix') }}"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300">
                    @error('prix')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Quantité -->
                <div class="mb-4">
                    <label for="quantite" class="block text-gray-700 font-semibold mb-1">Quantité en stock</label>
                    <input type="number" name="quantite" id="quantite" value="{{ old('quantite') }}"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300">
                    @error('quantite')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Catégorie -->
                <div class="mb-4">
                    <label for="categorie" class="block text-gray-700 font-semibold mb-1">Catégorie</label>
                    <select name="categorie" id="categorie"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300">
                        <option value="">-- Choisir une catégorie --</option>
                        <option value="poisson" {{ old('categorie') == 'poisson' ? 'selected' : '' }}>Poisson</option>
                        <option value="viande" {{ old('categorie') == 'viande' ? 'selected' : '' }}>Viande</option>
                        <option value="autres" {{ old('categorie') == 'autres' ? 'selected' : '' }}>Autres</option>
                    </select>
                    @error('categorie')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-semibold mb-1">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 font-semibold mb-1">Image du produit</label>
                    <input type="file" name="image" id="image"
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bouton -->
                <div class="text-right">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded">
                        Enregistrer
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
