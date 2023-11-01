@include('common.head', ['title' => 'Create product'])
<body>
    <h1>Create product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{ old('qty') }}">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price" value="{{ old('price') }}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{ old('description') }}">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>