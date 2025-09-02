@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row bg-gray-50 min-h-[calc(100vh-140px)]">
    @include('partials.sidebar')
    <div class="container mt-5">
    <!-- Header -->

    <main class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar (simulée) -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Menu</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('orders.my') }}" class="text-primary font-medium flex items-center">
                                <i class="fas fa-shopping-bag mr-2"></i>
                                Mes commandes
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('orders.hold') }}" class="text-gray-600 hover:text-primary flex items-center">
                                <i class="fas fa-user mr-2"></i>
                                Commandes validés ou livrés
                            </a>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Statistiques</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-3 rounded-lg text-center">
                            <p class="text-2xl font-bold text-primary">{{ count($orders) }}</p>
                            <p class="text-sm text-gray-600">Commandes</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded-lg text-center">
                            <p class="text-2xl font-bold text-secondary">
                                {{ $orders->where('status', 'pending')->count() }}
                            </p>
                            <p class="text-sm text-gray-600">En attentes</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded-lg text-center">
                            <p class="text-2xl font-bold text-secondary">
                                {{ $orders->where('status', 'validated')->count() }}
                            </p>
                            <p class="text-sm text-gray-600">Validées</p>
                        </div>
                        <div class="bg-green-50 p-3 rounded-lg text-center">
                            <p class="text-2xl font-bold text-secondary">
                                {{ $orders->where('status', 'delivered')->count() }}
                            </p>
                            <p class="text-sm text-gray-600">Livrées</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contenu principal -->
            <div class="lg:w-3/4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100">
                        <h2 class="text-xl font-semibold text-gray-800">Mes Commandes</h2>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <!-- En-têtes du tableau (visible sur desktop) -->
                        <div class="hidden md:grid grid-cols-12 gap-4 px-6 py-3 bg-gray-50 text-sm font-medium text-gray-500 uppercase tracking-wider">
                            <div class="col-span-1">#</div>
                            <div class="col-span-3">Date</div>
                            <div class="col-span-3">Produits</div>
                            <div class="col-span-2">Montant</div>
                            <div class="col-span-3">État</div>
                        </div>
                        
                        <!-- Liste des commandes -->
                        <div class="divide-y divide-gray-100">
                            @foreach($orders as $order)
                            <div class="p-6 hover:bg-gray-50 transition-colors">
                                <!-- Version desktop -->
                                <div class="hidden md:grid grid-cols-12 gap-4 items-center">
                                    <div class="col-span-1 font-medium text-gray-900">#{{ $order->id }}</div>
                                    <div class="col-span-3 text-gray-600">{{ $order->created_at->format('d/m/Y H:i') }}</div>
                                    <div class="col-span-3">
                                        <ul class="text-sm text-gray-600">
                                            @foreach($order->items as $item)
                                                <li>{{ $item->produit->name }} x {{ $item->quantity }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-span-2 font-semibold text-gray-900">{{ number_format($order->total, 0, ',', ' ') }} FCFA</div>
                                    <div class="col-span-3">
                                        @if($order->status == 'pending')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-pending bg-opacity-10 text-pending">
                                                <i class="fas fa-clock mr-1"></i> En attente
                                            </span>
                                        @elseif($order->status == 'validated')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-validated bg-opacity-10 text-validated">
                                                <i class="fas fa-check-circle mr-1"></i> Validée
                                            </span>
                                        @elseif($order->status == 'delivered')
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-delivered bg-opacity-10 text-delivered">
                                                <i class="fas fa-truck mr-1"></i> Livrée
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <!-- Version mobile -->
                                <div class="md:hidden">
                                    <div class="flex justify-between items-start mb-3">
                                        <div>
                                            <p class="font-semibold text-gray-900">Commande #{{ $order->id }}</p>
                                            <p class="text-sm text-gray-500">{{ $order->created_at->format('d/m/Y H:i') }}</p>
                                        </div>
                                        <div>
                                            @if($order->status == 'pending')
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-pending bg-opacity-10 text-pending">
                                                    <i class="fas fa-clock mr-1"></i> En attente
                                                </span>
                                            @elseif($order->status == 'validated')
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-validated bg-opacity-10 text-validated">
                                                    <i class="fas fa-check-circle mr-1"></i> Validée
                                                </span>
                                            @elseif($order->status == 'delivered')
                                                <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-delivered bg-opacity-10 text-delivered">
                                                    <i class="fas fa-truck mr-1"></i> Livrée
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <p class="text-sm font-medium text-gray-700 mb-1">Produits:</p>
                                        <ul class="text-sm text-gray-600 pl-4">
                                            @foreach($order->items as $item)
                                                <li class="list-disc">{{ $item->produit->name }} x {{ $item->quantity }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    
                                    <div class="flex justify-between items-center">
                                        <p class="text-sm text-gray-600">Montant total:</p>
                                        <p class="font-semibold text-gray-900">{{ number_format($order->total, 0, ',', ' ') }} FCFA</p>
                                    </div>
                                </div>
                                
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-6">
                        {{ $orders->links() }}
                    </div>
                    
                    <!-- Message si aucune commande -->
                    @if(count($orders) === 0)
                    <div class="p-12 text-center">
                        <i class="fas fa-shopping-bag text-4xl text-gray-300 mb-4"></i>
                        <h3 class="text-lg font-medium text-gray-600">Aucune commande pour le moment</h3>
                        <p class="text-gray-500 mt-2">Vos commandes apparaîtront ici une fois passées.</p>
                        <a href="{{route('product.all')}}" class="inline-block mt-4 px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark transition-colors">
                            Voir Les Produits
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
    </div> 
</div>
<script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        accent: '#F59E0B',
                        pending: '#F59E0B',
                        validated: '#3B82F6',
                        delivered: '#10B981'
                    }
                }
            }
        }
    </script>
@endsection
