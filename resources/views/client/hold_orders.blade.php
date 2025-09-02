@extends('layouts.app')
@section('content')
<div class="flex flex-col md:flex-row bg-gray-50 min-h-[calc(100vh-140px)]">
    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Contenu principal -->
    <main class="flex-1 p-6">
        @if (session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Mes commandes en cours</h1>

        <div class="bg-white shadow rounded-lg overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Produit</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Quantité</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Date de commande</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Statut</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Exemple statique -->
                    <tr>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">Ordinateur Portable HP</td>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">18 Juillet 2025</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-sm font-medium bg-yellow-100 text-yellow-800 rounded-full">En cours</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4">Clavier Mécanique</td>
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">17 Juillet 2025</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-sm font-medium bg-yellow-100 text-yellow-800 rounded-full">En cours</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">Souris Logitech</td>
                        <td class="px-6 py-4">3</td>
                        <td class="px-6 py-4">16 Juillet 2025</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-sm font-medium bg-yellow-100 text-yellow-800 rounded-full">En cours</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection
