@include('common.head', ['title' => 'Products'])
<body>
    <h1>Products</h1>
    
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div>
        <a href="{{ route('product.create') }}">New product</a>
    </div>

    <div>
        @if(sizeof($products) == 0)
            <p>No products found</p>
        @else
            <table border="1">
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
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('product.view', ['product' => $product]) }}">View</a>
                        </td>
                        <td>
                            <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
</body>
</html>