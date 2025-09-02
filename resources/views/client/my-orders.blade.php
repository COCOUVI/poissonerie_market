@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @include('partials.sidebar')
    <h2>📦 Suivi de mes commandes</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Produits</th>
                <th>Montant total</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    <ul>
                        @foreach($order->items as $item)
                            <li>{{ $item->product->name }} x {{ $item->quantity }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>{{ number_format($order->total, 0, ',', ' ') }} FCFA</td>
                <td>
                    @if($order->status == 'pending')
                        <span class="badge bg-warning">⏳ En attente</span>
                    @elseif($order->status == 'validated')
                        <span class="badge bg-info">✅ Validée</span>
                    @elseif($order->status == 'delivered')
                        <span class="badge bg-success">🚚 Livrée</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
