@include('common.head', ['title' => 'Product: ' . $product->name ])
<body>
    <h3>{{ $product->name }}</h3>
    <ul>
        <li>{{ $product->qty }}</li>
        <li>{{ $product->getPriceEur() }}</li>
        <li>{{ $product->description }}</li>
    </ul>
</body>
</html>