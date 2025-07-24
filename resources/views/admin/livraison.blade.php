@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 pt-24">
        <div class="bg-white shadow-lg rounded-xl p-6">
            <h1 class="text-2xl font-bold mb-6 text-gray-800">Options de Livraison</h1>

            <div class="flex justify-end mb-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 shadow">
                    + Ajouter une option
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm text-gray-700 border border-gray-200 rounded-lg">
                    <thead class="bg-gray-100 text-gray-700">
                        <tr>
                            <th class="p-3">Nom</th>
                            <th class="p-3">Tarif</th>
                            <th class="p-3">Délai estimé</th>
                            <th class="p-3 text-center">Active</th>
                            <th class="p-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-3">Livraison Standard</td>
                            <td class="p-3">1 000 FCFA</td>
                            <td class="p-3">3-5 jours ouvrables</td>
                            <td class="p-3 text-center">
                                <input type="checkbox" checked class="w-5 h-5 text-blue-600">
                            </td>
                            <td class="p-3 text-center">
                                <div class="flex justify-center gap-2">
                                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                        Modifier
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-t hover:bg-gray-50">
                            <td class="p-3">Livraison Express</td>
                            <td class="p-3">2 500 FCFA</td>
                            <td class="p-3">24h</td>
                            <td class="p-3 text-center">
                                <input type="checkbox" class="w-5 h-5 text-blue-600">
                            </td>
                            <td class="p-3 text-center">
                                <div class="flex justify-center gap-2">
                                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                        Modifier
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm">
                                        Supprimer
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
