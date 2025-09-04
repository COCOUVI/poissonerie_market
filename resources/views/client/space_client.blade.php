@extends('layouts.app')
@section('content')
<div class="flex flex-col md:flex-row bg-gray-50 min-h-[calc(100vh-140px)]"> <!-- Conteneur principal -->
    <!-- Sidebar - Version corrigée -->
     @include('partials.sidebar')
    <!-- Contenu principal -->
    <main class="flex-1 p-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-md p-6">
               
                <!-- Votre contenu ici -->
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Bienvenue dans votre espace client</h1>
                 @if (session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif
                <!-- Section infos client -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-teal-700 mb-4">Vos informations</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Nom complet :</p>
                            <p class="font-medium"> {{ Auth::user()->name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600">Email : </p>
                            <p class="font-medium">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>

                <!-- Actions rapides -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900">Actions rapides</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <a href="{{ route('orders.my') }}"
                            class="flex items-center space-x-3 p-4 bg-blue-100 rounded-lg hover:bg-blue-200 transition-colors">
                            <i class="fas fa-shopping-bag text-blue-600"></i>
                            <span class="font-medium text-blue-900">Commandes</span>
                        </a>

                        <a href="{{ route('orders.hold') }}"
                            class="flex items-center space-x-3 p-4 bg-green-100 rounded-lg hover:bg-green-200 transition-colors">
                            <i class="fas fa-shopping-bag text-green-600"></i>
                            <span class="font-medium text-green-900">Historique de commande</span>
                        </a>
                        <a href="{{route('cart.show')}}"
                            class="flex items-center space-x-3 p-4 bg-yellow-100 rounded-lg hover:bg-yellow-200 transition-colors">
                            <i class="fas fa-shopping-cart text-yellow-600"></i>
                            <span class="font-medium text-yellow-900">Panier</span>
                        </a>

                       

                    </div>
                </div>
    
            </div>
                
            </div>
        </div>
    </main>
</div>
@endsection