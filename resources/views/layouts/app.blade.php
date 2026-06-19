<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Style Store')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Hover effect untuk card produk */
        .product-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Nuansa biru tambahan */
        .navbar {
            background-color: #0d6efd !important; /* biru Bootstrap */
        }
        h1, .card-title {
            color: #0d6efd; /* judul biru */
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Style Store</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('products.create') }}">Tambah Produk</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten utama -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
