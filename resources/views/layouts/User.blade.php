<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        html, body {
            height: 100%;
        }

        body{
            background-color:#f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .top-header{
            background:#212529;
            color:white;
            font-size:14px;
        }

        .navbar-brand{
            font-size:28px;
            font-weight:bold;
        }

        .hero-banner{
            background:linear-gradient(135deg,#0d6efd,#4f46e5);
            color:white;
            padding:60px 0;
        }

        /* MAIN CONTENT FLEX FIX */
        .main-content{
            flex: 1;
        }

        footer{
            background:#212529;
            color:white;
            margin-top: auto;
        }

        .footer-link{
            color:#adb5bd;
            text-decoration:none;
        }

        .footer-link:hover{
            color:white;
        }
    </style>
</head>

<body>

<!-- Top Header -->
<div class="top-header py-2">
    <div class="container d-flex justify-content-between">
        <span>
            <i class="bi bi-truck"></i>
            Free Shipping On Orders Over $50
        </span>

        <span>
            <i class="bi bi-telephone"></i>
            +92 300 1234567
        </span>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container">

        <a class="navbar-brand text-primary" href="#">
            NovaMart
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item"><a class="nav-link fw-semibold" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="#">Products</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="#">Categories</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="#">Deals</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold" href="#">Contact</a></li>

            </ul>

            <div class="d-flex gap-2">

                <a href="#" class="btn btn-outline-primary">
                    <i class="bi bi-person"></i>
                    Login
                </a>

                <a href="#" class="btn btn-primary">
                    <i class="bi bi-cart3"></i>
                    Cart
                </a>

            </div>

        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="hero-banner text-center">
    <div class="container">

        <h1 class="display-4 fw-bold">
            Welcome To NovaMart
        </h1>

        <p class="lead">
            Discover Amazing Products At The Best Prices
        </p>

        <a href="#" class="btn btn-light btn-lg">
            Shop Now
        </a>

    </div>
</header>

<!-- MAIN CONTENT -->
<div class="container my-5 main-content">
    @yield('content')
</div>

<!-- Footer -->
<footer class="pt-5 pb-3">

    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-4">
                <h4>NovaMart</h4>
                <p>
                    Your trusted ecommerce destination for quality products and secure shopping.
                </p>
            </div>

            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>

                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">Products</a></li>
                    <li><a href="#" class="footer-link">Categories</a></li>
                    <li><a href="#" class="footer-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5>Contact</h5>

                <p>Email: support@novamart.com</p>
                <p>Phone: +92 300 1234567</p>
                <p>Karachi, Pakistan</p>
            </div>

        </div>

        <hr>

        <div class="text-center">
            © 2026 NovaMart | All Rights Reserved
        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>