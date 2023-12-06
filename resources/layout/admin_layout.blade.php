<!-- resources/views/layouts/admin_layout.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel - GYMSTER</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Other stylesheets and meta tags as needed -->
</head>

<body>
    <!-- Header Start -->
    <!-- Your header content here -->
    </header>
    <!-- Header End -->

    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer Start -->
    <!-- Your footer content here -->
    </footer>
    <!-- Footer End -->

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Bootstrap JS (optional, if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
