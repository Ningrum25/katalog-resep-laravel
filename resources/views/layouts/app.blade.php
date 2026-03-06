<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Resep</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            background-attachment: fixed;
            font-family: 'Poppins', sans-serif;
            color: white;
            min-height: 100vh;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card {
            border-radius: 20px;
            transition: 0.3s;
            border: none;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
        }

        /* Menyesuaikan teks di dalam card agar tetap terbaca */
        .card-body {
            color: #333;
        }

        .btn-light {
            border-radius: 10px;
            font-weight: 600;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark p-3 mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/recipes"><h3>🍜 Katalog Resep</h3></a>
        <a href="/recipes/create" class="btn btn-light shadow-sm">Tambah Resep</a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>