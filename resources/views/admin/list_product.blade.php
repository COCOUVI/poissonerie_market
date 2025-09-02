@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen">
    <div class="container mx-auto px-4 pt-24">

        <!-- Messages -->
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

        <!-- Titre + bouton -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Catalogue Produits</h1>
            <button onclick="document.getElementById('addProductModal').classList.remove('hidden')" 
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">
                + Ajouter Produit
            </button>
        </div>

        <!-- Table -->
        <table class="w-full bg-white shadow rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="p-3">Image</th>
                    <th class="p-3">Nom</th>
                    <th class="p-3">Catégorie</th>
                    <th class="p-3">Prix</th>
                    <th class="p-3">Quantité</th>
                    <th class="p-3">Stock</th>
                    <th class="p-3">Description</th>
                    <th class="text-center p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($produits as $produit)
                    <tr class="border-t">
                        <td class="p-3">
                            <img src="{{ asset('storage/'.$produit->image) }}" class="w-16 h-16 object-cover rounded">
                        </td>
                        <td class="p-3">{{ $produit->name }}</td>
                        <td class="p-3">{{ $produit->category->name }}</td>
                        <td class="p-3">{{ $produit->price }} FCFA</td>
                        <td class="p-3">{{ $produit->stock }} kg</td>
                        <td class="p-3">
                            @if($produit->stock > 10)
                                <span class="px-2 py-1 bg-green-200 text-green-800 rounded">En stock</span>
                            @elseif($produit->stock > 0)
                                <span class="px-2 py-1 bg-yellow-200 text-yellow-800 rounded">Faible</span>
                            @else
                                <span class="px-2 py-1 bg-red-200 text-red-800 rounded">Rupture</span>
                            @endif
                        </td>
                        <td class="p-3 text-sm">{{ $produit->description }}</td>
                        <td class="p-3 text-center flex justify-center gap-2">
                            <!-- Bouton Modifier -->
                            <button 
                                onclick="openEditModal({{ $produit->id }}, '{{ $produit->name }}', '{{ $produit->price }}', '{{ $produit->stock }}', '{{ $produit->description }}', '{{ $produit->category_id }}')" 
                                class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                Modifier
                            </button>


                            <!-- Supprimer -->
                            <form action="{{ route('admin.deleteProduct', $produit->id) }}" method="POST" onsubmit="return confirm('Supprimer ce produit ?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500">Aucun produit disponible.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</main>

<!-- Modal Ajouter Produit -->
<div id="addProductModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
        <button onclick="document.getElementById('addProductModal').classList.add('hidden')" class="absolute top-3 right-3">✖</button>
        <h2 class="text-xl font-bold mb-4">Ajouter un produit</h2>

        <form action="{{ route('admin.storeProduct') }}" method="POST" enctype="multipart/form-data" class="space-y-3">
            @csrf
            <div>
                <label>Nom</label>
                <input type="text" name="nom" class="w-full border px-3 py-2 rounded">
            </div>
            <div>
                <label>Catégorie</label>
                <select name="categorie_id" class="w-full border px-3 py-2 rounded">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Prix (FCFA)</label>
                <input type="number" name="prix" class="w-full border px-3 py-2 rounded">
            </div>
            <div>
                <label>Quantité (kg)</label>
                <input type="number" name="quantite" class="w-full border px-3 py-2 rounded">
            </div>
            <div>
                <label>Description</label>
                <textarea name="description" rows="3" class="w-full border px-3 py-2 rounded"></textarea>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" class="w-full">
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('addProductModal').classList.add('hidden')" class="px-4 py-2 border rounded">Annuler</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Ajouter</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Modifier Produit -->
<div id="editProductModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
        <button onclick="document.getElementById('editProductModal').classList.add('hidden')" class="absolute top-3 right-3">✖</button>
        <h2 class="text-xl font-bold mb-4">Modifier le produit</h2>

        <form id="editProductForm" method="POST" enctype="multipart/form-data" class="space-y-3">
            @csrf @method('PUT')
            <input type="hidden" name="id" id="edit_id">

            <div>
                <label>Nom</label>
                <input type="text" name="nom" id="edit_nom" class="w-full border px-3 py-2 rounded">
            </div>
            <div>
                <label>Catégorie</label>
                <select name="categorie_id" id="edit_categorie" class="w-full border px-3 py-2 rounded">
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Prix (FCFA)</label>
                <input type="number" name="prix" id="edit_prix" class="w-full border px-3 py-2 rounded">
            </div>
            <div>
                <label>Quantité (kg)</label>
                <input type="number" name="quantite" id="edit_quantite" class="w-full border px-3 py-2 rounded">
            </div>
            <div>
                <label>Description</label>
                <textarea name="description" id="edit_description" rows="3" class="w-full border px-3 py-2 rounded"></textarea>
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" class="w-full">
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" onclick="document.getElementById('editProductModal').classList.add('hidden')" class="px-4 py-2 border rounded">Annuler</button>
                <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">Modifier</button>
            </div>
        </form>
    </div>
</div>

<script>
function openEditModal(id, name, price, stock, description, category_id) {
    document.getElementById('edit_id').value = id;
    document.getElementById('edit_nom').value = name;
    document.getElementById('edit_prix').value = price;
    document.getElementById('edit_quantite').value = stock;
    document.getElementById('edit_description').value = description;
    document.getElementById('edit_categorie').value = category_id;
    document.getElementById('editProductForm').action = '/admin/products/' + id;
    document.getElementById('editProductModal').classList.remove('hidden');
}
</script>
@endsection
