@extends('layouts.app')

@section('content')
<body class="min-h-screen bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800">Finaliser ma commande</h1>
                <a href="#" class="text-primary hover:text-primary-dark">
                    <i class="fas fa-shopping-cart mr-1"></i>
                    Panier
                </a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Panier -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Votre panier</h2>
                
                <div class="space-y-4 mb-6">
                    @foreach($cartItems as $item)
                    <div class="flex justify-between items-center py-3 border-b border-gray-100">
                        <div>
                            <h3 class="font-medium text-gray-800">{{ $item->produit->name }}</h3>
                            <p class="text-sm text-gray-500">Quantité: {{ $item->quantity }}</p>
                        </div>
                        <span class="font-semibold text-gray-800">{{ $item->quantity * $item->produit->price }} FCFA</span>
                    </div>
                    @endforeach
                </div>
                
                <div class="flex justify-between items-center pt-4 border-t border-gray-200">
                    <strong class="text-lg text-gray-800">Total</strong>
                    <strong class="text-lg text-secondary">{{ $total }} FCFA</strong>
                </div>
            </div>

            <!-- Formulaire de paiement -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-6">Validation de la commande</h2>
                
                <form method="POST" action="{{ route('orders.processCheckout') }}">
                    @csrf
                    
                    <div class="mb-6">
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Numéro de téléphone (Fedapay)
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-gray-400"></i>
                            </div>
                            <input 
                                type="text" 
                                name="phone" 
                                id="phone" 
                                class="pl-10 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 py-2 px-3" 
                                placeholder="+229XXXXXXXX" 
                                required
                            >
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Veuillez entrer votre numéro pour le paiement Mobile Money</p>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-md mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-info-circle text-blue-400"></i>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-blue-800">Paiement sécurisé</h3>
                                <div class="mt-2 text-sm text-blue-700">
                                    <p>Votre paiement sera traité de manière sécurisée par Fedapay.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(now()->format('H') < 7 || now()->format('H') >= 20)
                        <div class="alert alert-danger">
                            🚫 Désolé, notre boutique est fermée. Commandes possibles de 07h à 20h.
                        </div>
                   

                    <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors" disabled>                  <i class="fas fa-lock mr-2"></i>
                        Payer avec Fedapay
                    </button>
                    @else
                    <button type="submit" class="w-full flex justify-center items-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors" disabled>                  <i class="fas fa-lock mr-2"></i>
                        Payer avec Fedapay
                    </button>
                    @endif
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
