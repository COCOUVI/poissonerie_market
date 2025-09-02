@extends('layouts.app1')

@section('content')
<main class="p-6 min-h-screen bg-gray-50">
    <div class="max-w-6xl mx-auto">
        <!-- Titre -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Liste des Commandes</h1>

        <!-- Tableau -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gray-100 text-left text-gray-600 text-sm uppercase">
                     <tr>
                        <th>ID</th>
                        <th>Client</th>
                        <th>Téléphone</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y divide-gray-200">
                    <!-- Exemple commande 1 -->
                    @foreach($orders as $order)
            <tr>
                <td>#{{ $order->id }}</td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ number_format($order->total, 0, ',', ' ') }} FCFA</td>
                <td>
                    <span class="badge bg-{{ $order->status === 'paid' ? 'success' : ($order->status === 'pending' ? 'warning' : 'secondary') }}">
                        {{ ucfirst($order->status) }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('admin.orders.updateStatus', [$order->id, 'validated']) }}" class="btn btn-sm btn-primary">Valider</a>
                    <a href="{{ route('admin.orders.updateStatus', [$order->id, 'delivered']) }}" class="btn btn-sm btn-success">Livrer</a>
                </td>
            </tr>
            @endforeach

                </tbody>
            </table>
        </div>
    </div>
</main>


@endsection
