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
                
                <!-- Section infos client -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold text-teal-700 mb-4">Vos informations</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600">Nom complet :</p>
                            <p class="font-medium"></p>
                        </div>
                        <div>
                            <p class="text-gray-600">Email :</p>
                            <p class="font-medium"></p>
                        </div>
                    </div>
                </div>

                <!-- Dernières commandes -->
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-teal-700">Vos dernières commandes</h2>
                        <a href="#" class="text-teal-600 hover:underline">Voir tout</a>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700">
                                    <th class="py-2 px-4 text-left">N° Commande</th>
                                    <th class="py-2 px-4 text-left">Date</th>
                                    <th class="py-2 px-4 text-left">Statut</th>
                                    <th class="py-2 px-4 text-left">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="py-3 px-4">#PC-2023-001</td>
                                    <td class="py-3 px-4">15/07/2023</td>
                                    <td class="py-3 px-4">
                                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Livrée</span>
                                    </td>
                                    <td class="py-3 px-4">42,50 €</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection