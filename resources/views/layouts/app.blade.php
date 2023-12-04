<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/products">Visi produkti</a>
            <a class="navbar-brand" href="/products/create">Jauns produkts</a>
        </div>
    </nav>

    <div class="container pt-3">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <script src="custom.js"></script>
</body>
</html>