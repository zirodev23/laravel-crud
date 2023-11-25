@extends('layouts.app', ['title' => 'Create product'])

@section('content')
    <h1>Create product</h1>
    <div>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <div class="mb-3">
            <label for="nameInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="nameInput" name="name" placeholder="Name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="qtyInput" class="form-label">Qty</label>
            <input type="text" class="form-control" id="qtyInput" name="qty" placeholder="Qty" value="{{ old('qty') }}">
        </div>
        <div class="mb-3">
            <label for="priceInput" class="form-label">Price</label>
            <input type="text" class="form-control" id="priceInput" name="price" placeholder="Price" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <label for="descriptionInput" class="form-label">Description</label>
            <input type="text" class="form-control" id="descriptionInput" name="description" placeholder="Description" value="{{ old('description') }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="Save a New Product">
        </div>
    </form>

    <p>
        <a href="/products" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
            Back to all products
        </a>
    </p>
@endsection