@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row bg-gray-50 min-h-[calc(100vh-140px)]">
    @include('partials.sidebar')
   <div class="container py-5">

    {{-- Titre dans une box stylée --}}
    <div class="bg-primary bg-opacity-10 border border-primary rounded p-4 mb-5 text-center">
        <h4 class="display-5 fw-bold text-primary">🛒 Mon Panier</h4>
    </div>

    {{-- Message succès --}}
    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    {{-- Si le panier contient des articles --}}
    @if($cart && $cart->items->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle text-center shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart->items as $item)
                        <tr>
                            <td>{{ $item->produit->nom }}</td>
                            <td>{{ number_format($item->price, 0, ',', ' ') }} CFA</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ number_format($item->price * $item->quantity, 0, ',', ' ') }} CFA</td>
                            <td>
                                <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">🗑 Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Total + actions --}}
        <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap">
            <h4>Total : <strong>{{ number_format($total, 0, ',', ' ') }} CFA</strong></h4>

            <div class="mt-3 mt-md-0">
                <a href="{{ route('orders.checkout') }}" class="btn btn-success btn-lg me-2">
                    ✅ Valider ma commande
                </a>
                <a href="{{ route('cart.clear') }}" class="btn btn-outline-danger btn-lg"
                   onclick="return confirm('Êtes-vous sûr de vouloir vider le panier ?')">
                    🗑 Vider le panier
                </a>
            </div>
        </div>
    @else
        {{-- Panier vide --}}
        <div class="text-center mt-5">
            <div class="alert alert-info">Votre panier est vide.</div>
            
            <button onclick="window.location='{{ route('products.all') }}'" class="bg-blue-500 hover:bg-primary-600 text-white px-4 py-2 rounded-md">
                🔙 Retour aux produits
            </button>
        </div>
    @endif
</div>

</div>
@endsection
