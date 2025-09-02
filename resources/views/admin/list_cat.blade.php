@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen">
    @if(session('success'))
    <div class="mb-4 p-3 text-green-800 bg-green-200 rounded">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 p-3 text-red-800 bg-red-200 rounded">
        <ul>
            @foreach($errors->all() as $error)
                <li>- {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container mx-auto px-4 pt-24">
        <!-- Titre + bouton Ajouter -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Gestion des Catégories</h1>
            
            <button onclick="document.getElementById('addCategoryModal').classList.remove('hidden')" 
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                + Ajouter Catégorie
            </button>
        </div>

        <!-- Table des catégories -->
        <table class="w-full bg-white shadow rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="text-left p-3">#</th>
                    <th class="text-left p-3">Nom</th>
                    <th class="text-left p-3">Description</th>
                    <th class="text-center p-3">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-800">
                @forelse($categories as $category)
                <tr class="border-t">
                    <td class="p-3">{{ $category->id }}</td>
                    <td class="p-3">{{ $category->name }}</td>
                    <td class="p-3 text-sm">{{ $category->description }}</td>
                    <td class="p-3 text-center">
                        <div class="flex justify-center items-center gap-2">
                            <button onclick="document.getElementById('editCategoryModal-{{ $category->id }}').classList.remove('hidden')" 
                                class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                Modifier
                            </button>

                            <form action="{{ route('admin.deleteCategory', $category->id) }}" method="POST" onsubmit="return confirm('Supprimer cette catégorie ?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-gray-500">Aucune catégorie enregistrée.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<!-- Modal Ajouter Catégorie -->
<div id="addCategoryModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        <!-- Bouton fermer -->
        <button onclick="document.getElementById('addCategoryModal').classList.add('hidden')" 
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            ✖
        </button>

        <h2 class="text-xl font-bold mb-4">Ajouter une Catégorie</h2>

        <!-- Formulaire -->
        <form action="{{ route('admin.storeCategory') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                <input type="text" name="name" id="name" required 
                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="3"
                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('addCategoryModal').classList.add('hidden')" 
                    class="px-4 py-2 rounded-md border">Annuler</button>
                <button type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
                    Ajouter
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Modal Modifier Catégorie -->
<div id="editCategoryModal-{{ $category->id }}" 
    class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        <!-- Bouton fermer -->
        <button onclick="document.getElementById('editCategoryModal-{{ $category->id }}').classList.add('hidden')" 
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            ✖
        </button>

        <h2 class="text-xl font-bold mb-4">Modifier Catégorie</h2>

        <!-- Formulaire -->
        <form action="{{ route('admin.updateCategory', $category->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                <input type="text" name="name" value="{{ $category->name }}" required
                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="3"
                    class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">{{ $category->description }}</textarea>
            </div>

            <div class="flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('editCategoryModal-{{ $category->id }}').classList.add('hidden')" 
                    class="px-4 py-2 rounded-md border">Annuler</button>
                <button type="submit" 
                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">
                    Sauvegarder
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
