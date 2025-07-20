@extends('layouts.app')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">🛒 Mon panier</h2>

        <table class="w-full border-collapse">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="py-2 px-4 border-b">Produit</th>
                    <th class="py-2 px-4 border-b">Quantité</th>
                    <th class="py-2 px-4 border-b">Prix</th>
                    <th class="py-2 px-4 border-b">Total</th>
                    <th class="py-2 px-4 border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border-b flex items-center gap-2">
                        <img src="https://via.placeholder.com/50" alt="Poisson Tilapia" class="w-10 h-10 object-cover rounded">
                        <span>Tilapia frais</span>
                    </td>
                    <td class="py-2 px-4 border-b">2 kg</td>
                    <td class="py-2 px-4 border-b">2 000 FCFA/kg</td>
                    <td class="py-2 px-4 border-b">4 000 FCFA</td>
                    <td class="py-2 px-4 border-b">
                        <button class="text-red-600 hover:text-red-800">🗑 Supprimer</button>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border-b flex items-center gap-2">
                        <img src="https://via.placeholder.com/50" alt="Crevettes" class="w-10 h-10 object-cover rounded">
                        <span>Crevettes</span>
                    </td>
                    <td class="py-2 px-4 border-b">1 kg</td>
                    <td class="py-2 px-4 border-b">3 500 FCFA/kg</td>
                    <td class="py-2 px-4 border-b">3 500 FCFA</td>
                    <td class="py-2 px-4 border-b">
                        <button class="text-red-600 hover:text-red-800">🗑 Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="flex justify-between items-center mt-6">
            <p class="text-lg font-semibold">Total : <span class="text-blue-600">7 500 FCFA</span></p>
            <button class="bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700">✅ Valider la commande</button>
        </div>
    </div>
</main>
@endsection
