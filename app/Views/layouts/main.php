<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(45deg, #007bff, #6610f2);
        }
        .navbar-brand {
            font-weight: bold;
        }
        header {
            background: url('https://via.placeholder.com/1920x600') center/cover no-repeat;
            color: white;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        header h1 {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        header p {
            font-size: 1.25rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        section {
            padding: 60px 0;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: none;
        }
        footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
    <?= $this->renderSection('styles') ?>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">RentalMobil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light text-primary" href="login.html">Login</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link btn btn-outline-light" href="register.html">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header>
        <div class="container text-center">
            <h1>Selamat Datang di RentalMobil</h1>
            <p class="lead">Pesan mobil dengan mudah, cepat, dan terpercaya</p>
            <a href="#form-pemesanan" class="btn btn-primary btn-lg">Pesan Sekarang</a>
        </div>
    </header>

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 RentalMobil. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
