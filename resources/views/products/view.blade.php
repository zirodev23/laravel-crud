@extends('layouts.app', ['title' => 'Product: ' . $product->name])

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Quantity: {{ $product->qty }}</li>
            <li class="list-group-item">Price: {{ $product->getPriceEur() }}</li>
            <li class="list-group-item">Description: {{ $product->description }}</li>
        </ul>
    </div>

    <p>
        <a href="/products" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
            Back to all products
        </a>
    </p>
@endsection