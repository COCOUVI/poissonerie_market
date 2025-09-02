@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Finaliser ma commande</h1>

    <div class="card">
        <div class="card-body">
            <h4>Votre panier</h4>
            <ul class="list-group mb-3">
                @foreach($cartItems as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item->product->name }} (x{{ $item->quantity }})
                        <span>{{ $item->quantity * $item->product->price }} FCFA</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Total</strong>
                    <strong>{{ $total }} FCFA</strong>
                </li>
            </ul>

            <form method="POST" action="{{ route('orders.processCheckout') }}">
                @csrf
                <div class="mb-3">
                    <label for="phone" class="form-label">Numéro de téléphone (Fedapay)</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    Payer avec Fedapay
                </button>
            </form>
        </div>
    </div>

    <div class="container">
    <h2>Validation de la commande</h2>
    <form action="{{ route('orders.processCheckout') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="phone">Numéro de téléphone (Mobile Money)</label>
            <input type="text" name="phone" class="form-control" required placeholder="+229XXXXXXXX">
        </div>
        <button type="submit" class="btn btn-success mt-3">Payer avec Fedapay</button>
    </form>
</div>
</div>
@endsection
