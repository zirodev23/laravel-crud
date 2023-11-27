@extends('layouts.app', ['title' => 'Produkts: ' . $product->name])

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Daudzums: {{ $product->qty }}</li>
            <li class="list-group-item">Cena: {{ $product->getPriceEur() }}</li>
            <li class="list-group-item">Apraksts: {{ $product->description }}</li>
        </ul>
    </div>

    <p>
        <a href="/products" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
            Visi produkti
        </a>
    </p>
@endsection