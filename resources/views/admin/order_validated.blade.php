@extends('layouts.app1')

@section('content')
<main class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
    
    <!-- Header: Titre + Recherche + Filtres -->
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4 mb-6">
        <h2 class="text-xl font-bold text-gray-800">Liste des Commandes</h2>
        
        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 sm:gap-4 w-full sm:w-auto">
            <div class="relative w-full sm:w-auto">
                <input type="text" placeholder="Rechercher..." class="pl-10 pr-4 py-2 border rounded-lg w-full sm:w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i data-feather="search" class="absolute left-3 top-2.5 text-gray-400"></i>
            </div>
            <button class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 flex items-center justify-center space-x-2">
                <i data-feather="filter" class="w-4 h-4"></i>
                <span>Filtrer</span>
            </button>
        </div>
    </div>

    <!-- Tableau -->
    <div class="bg-white rounded-xl shadow overflow-hidden">
        <div class="w-full overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase">ID</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase">Client</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase">Téléphone</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase">Total</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase">Statut</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($orders as $order)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">#{{ $order->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $order->user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $order->phone }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ number_format($order->total, 0, ',', ' ') }} FCFA</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($order->status == 'pending')
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-yellow-100 text-yellow-800">
                                    <i class="fas fa-clock mr-1"></i> En attente
                                </span>
                            @elseif($order->status == 'validated')
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-blue-100 text-blue-800">
                                    <i class="fas fa-check-circle mr-1"></i> Validée
                                </span>
                            @elseif($order->status == 'delivered')
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-100 text-green-800">
                                    <i class="fas fa-truck mr-1"></i> Livrée
                                </span>
                            @elseif($order->status == 'paid')
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-green-200 text-green-900">
                                    <i class="fas fa-credit-card mr-1"></i> Payée
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full bg-gray-200 text-gray-800">
                                    <i class="fas fa-question-circle mr-1"></i> {{ ucfirst($order->status) }}
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                            <a href="{{ route('admin.orders.updateStatus', [$order->id, 'validated']) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-md">
                                Valider
                            </a>
                            <a href="{{ route('admin.orders.updateStatus', [$order->id, 'delivered']) }}" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-md">
                                Livrer
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 px-6 py-3 flex justify-between items-center border-t border-gray-200">
            <div>
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</main>

<!-- Feather icons -->
<script>
    feather.replace();
</script>
@endsection
