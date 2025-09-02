@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row bg-gray-50 min-h-[calc(100vh-140px)]">
    @include('partials.sidebar')
    <div class="container mx-auto px-4 pt-24">
        <div class="bg-white shadow-lg rounded-xl p-6">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 flex items-center gap-2">
                🛒 Mon Panier
            </h1>

            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if($cart && $cart->items->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-gray-700 border border-gray-200 rounded-lg">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="p-3 text-left">Produit</th>
                                <th class="p-3 text-center">Prix</th>
                                <th class="p-3 text-center">Quantité</th>
                                <th class="p-3 text-center">Total</th>
                                <th class="p-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->items as $item)
                                <tr class="border-t hover:bg-gray-50">
                                    <td class="p-3">{{ $item->produit->name }}</td>
                                    <td class="p-3 text-center">{{ number_format($item->price, 0, ',', ' ') }} CFA</td>
                                    <td class="p-3 text-center">{{ $item->quantity }}</td>
                                    <td class="p-3 text-center">{{ number_format($item->price * $item->quantity, 0, ',', ' ') }} CFA</td>
                                    <td class="p-3 text-center">
                                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                                🗑 Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Total & Actions --}}
                <div class="flex flex-col md:flex-row justify-between items-center mt-6 gap-4">
                    <h2 class="text-xl font-semibold text-gray-800">
                        🧾 Total : <span class="text-green-600">{{ number_format($total, 0, ',', ' ') }} CFA</span>
                    </h2>

                    <div class="flex gap-3">
                        <a href="{{ route('orders.checkout') }}" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded shadow">
                            ✅ Valider ma commande
                        </a>
                        <form action="{{ route('cart.clear') }}" method="POST" onsubmit="return confirm('Vider le panier ?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-gray-200 hover:bg-gray-300 text-red-600 px-5 py-2 rounded shadow">
                                🗑 Vider le panier
                            </button>
                        </form>
                    </div>
                </div>
            @else
                {{-- Panier vide --}}
                <div class="text-center mt-12">
                    <div class="text-gray-600 text-lg mb-4">
                        Votre panier est vide 😢
                    </div>
                    <a href="{{ route('product.all') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded shadow">
                        🔙 Retour aux produits
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
