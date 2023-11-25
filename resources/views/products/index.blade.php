@extends('layouts.app', ['title' => 'All products'])

@section('content')
    <h1>Products</h1>
    
    <div>
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div>
        @if(sizeof($products) == 0)
            <div class="alert alert-info" role="alert">
                No products found
            </div>

        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <a href="{{ route('products.view', ['product' => $product]) }}">View</a>
                            </td>
                            <td>
                                <a href="{{ route('products.edit', ['product' => $product]) }}">Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('products.destroy', ['product' => $product]) }}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection