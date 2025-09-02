@extends('layouts.app1')
@section('content')
<main class="p-6 min-h-screen">

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Ventes aujourd'hui -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Ventes aujourd'hui</p>
                    <p class="text-2xl font-bold text-gray-900">{{ number_format($salesToday, 0, ',', ' ') }} FCFA</p>
                </div>
                <i class="fas fa-euro-sign text-2xl text-green-600"></i>
            </div>
        </div>

        <!-- Commandes en attente -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Commandes en attente</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $pendingOrdersCount }}</p>
                </div>
                <i class="fas fa-shopping-cart text-2xl text-blue-600"></i>
            </div>
        </div>

        <!-- Commandes validées -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Commandes validées</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $validatedOrdersCount }}</p>
                </div>
                <i class="fas fa-check-circle text-2xl text-blue-600"></i>
            </div>
        </div>

        <!-- Nouveaux clients -->
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600">Nouveaux clients</p>
                    <p class="text-2xl font-bold text-gray-900">{{ $newClientsCount }}</p>
                </div>
                <i class="fas fa-users text-2xl text-orange-600"></i>
            </div>
        </div>
    </div>

    <!-- Commandes récentes -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Commandes récentes</h3>
        </div>
        <div class="p-6 space-y-4">
            @forelse($recentOrders as $order)
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-900">{{ $order->user->name }}</p>
                    <p class="text-sm text-gray-600">#{{ $order->id }} – {{ number_format($order->total, 0, ',', ' ') }} FCFA</p>
                </div>
                <div class="text-right">
                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full
                        @if($order->status == 'pending') bg-yellow-100 text-yellow-800
                        @elseif($order->status == 'validated') bg-blue-100 text-blue-800
                        @elseif($order->status == 'delivered') bg-green-100 text-green-800
                        @else bg-gray-100 text-gray-800 @endif">
                        {{ ucfirst($order->status) }}
                    </span>
                </div>
            </div>
            @empty
                <p class="text-gray-600">Aucune commande récente.</p>
            @endforelse
        </div>
    </div>

    <!-- Produits récents -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 mb-8">
        <div class="p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Produits récents</h3>
        </div>
        <div class="p-6 space-y-4">
            @forelse($recentProducts as $product)
            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                <div>
                    <p class="font-medium text-gray-900">{{ $product->name }}</p>
                    <p class="text-sm text-gray-600">{{ number_format($product->price ?? 0, 0, ',', ' ') }} FCFA</p>
                </div>
            </div>
            @empty
                <p class="text-gray-600">Aucun produit récent.</p>
            @endforelse
        </div>
    </div>

    <!-- Actions rapides -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Actions rapides</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="{{route('admin.listProducts')}}"
                            class="flex items-center space-x-3 p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <i class="fas fa-plus text-blue-600"></i>
                            <span class="font-medium text-blue-900">Ajouter un produit</span>
                        </a>

                        <a href="{{route('admin.listCategories')}}"
                            class="flex items-center space-x-3 p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors">
                            <i class="fas fa-plus text-blue-600"></i>
                            <span class="font-medium text-green-900">Ajouter une categorie</span>
                        </a>

                       

                    </div>
                </div>
</div>
</main>
@endsection
