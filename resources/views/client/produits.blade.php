@extends('layouts.app')

@section('content')
<main class="p-4 sm:p-6 min-h-screen bg-gray-50">
    <div class="container mx-auto">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 text-center sm:text-left">Notre Catalogue</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($produits as $produit)
                <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
                    {{-- Image --}}
                    <img src="{{ $produit->image ? asset('storage/'.$produit->image) : asset('images/produits/default.jpg') }}" 
                         alt="{{ $produit->name }}" class="h-48 w-full object-cover">

                    {{-- Contenu --}}
                    <div class="p-4 flex-1 flex flex-col">
                        <h2 class="text-xl font-semibold mb-2">{{ $produit->name }}</h2>
                        <p class="text-gray-600 mb-4 flex-1">{{ Str::limit($produit->description, 60, '...') }}</p>
                        <p class="text-lg font-bold text-green-600 mb-4">{{ number_format($produit->price, 0, ',', ' ') }} FCFA/kg</p>

                        {{-- Boutons --}}
                        <div class="space-y-2">
                            <form action="{{ route('cart.add', $produit->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Ajouter au panier</button>
                            </form>

                            

                            <button onclick="openDetailsModal({{ $produit->id }})" 
                                    class="block w-full bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 rounded text-center">
                                Voir détails
                            </button>
                        </div>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">Aucun produit disponible pour le moment.</p>
            @endforelse
        </div>
    </div>
</main>

{{-- Modal popup détails produit --}}
<div id="detailsModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 px-2">
    <div class="bg-white rounded-lg shadow-lg w-11/12 max-w-sm sm:max-w-md md:max-w-lg p-6 relative">
        <button onclick="closeDetailsModal()" class="absolute top-3 right-3 text-gray-600 hover:text-gray-900 font-bold text-xl">✖</button>
        <img id="modalImage" src="" alt="" class="w-full h-48 object-cover rounded mb-4">
        <h2 id="modalName" class="text-2xl font-bold mb-2"></h2>
        <p id="modalDescription" class="text-gray-700 mb-2"></p>
        <p id="modalPrice" class="text-lg font-bold text-green-600 mb-4"></p>
        <p id="modalCategory" class="text-sm text-gray-500 mb-4"></p>
        <div class="flex gap-2">
            <form id="modalAddCartForm" method="POST">
                @csrf
                <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded">Ajouter au panier</button>
            </form>
     </div>
    </div>
</div>

<script>
    const produits = @json($produits);

    function openDetailsModal(id) {
        const produit = produits.find(p => p.id === id);
        if (!produit) return;

        document.getElementById('modalImage').src = produit.image ? `/storage/${produit.image}` : '/images/produits/default.jpg';
        document.getElementById('modalName').innerText = produit.name;
        document.getElementById('modalDescription').innerText = produit.description ?? 'Pas de description';
        document.getElementById('modalPrice').innerText = `${produit.price.toLocaleString()} FCFA/kg`;
        document.getElementById('modalCategory').innerText = produit.category ? `Catégorie : ${produit.category.name}` : 'Catégorie : Aucun';

        // Formulaire ajouter au panier
        const form = document.getElementById('modalAddCartForm');
        form.action = `/cart/add/${produit.id}`;

        // Lien commander
        const orderLink = document.getElementById('modalOrderLink');
        orderLink.href = `/order/create/${produit.id}`;

        document.getElementById('detailsModal').classList.remove('hidden');
    }

    function closeDetailsModal() {
        document.getElementById('detailsModal').classList.add('hidden');
    }
</script>
@endsection
