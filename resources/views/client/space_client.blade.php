@extends('layouts.app')
@section('content')
<div class="flex flex-col md:flex-row bg-gray-50 min-h-[calc(100vh-140px)]"> <!-- Conteneur principal -->
    <!-- Sidebar - Version corrigée -->
    <aside class="w-full md:w-64 bg-blue-900 text-white p-4 shadow-lg flex flex-col">
        <div class="flex-1">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-xl font-bold">Mon Espace</h2>
                <div class="w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center">
                    <span class="text-sm">AJ</span>
                </div>
            </div>

            <nav>
                <h3 class="text-teal-200 uppercase text-xs font-semibold tracking-wider mb-2">Commandes</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center px-3 py-2 rounded hover:bg-teal-600 transition">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                            </svg>
                            En cours
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center px-3 py-2 rounded hover:bg-teal-600 transition">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Historique
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

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