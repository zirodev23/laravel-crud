@extends('layouts.app', ['title' => 'Product: ' . $product->name])

@section('content')

    <h3>{{ $product->name }}</h3>
    <ul>
        <li>{{ $product->qty }}</li>
        <li>{{ $product->getPriceEur() }}</li>
        <li>{{ $product->description }}</li>
    </ul>
    <a href="/products">Back to all products</a>
@endsection