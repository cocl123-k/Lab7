<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <header class="bg-primary text-white text-center py-3">
        <h2>My Laravel App</h2>
        <nav>
            <a href="/home" class="text-white text-decoration-none mx-3">Trang Chủ</a>
            <a href="/contact" class="text-white text-decoration-none mx-3">Liên Hệ</a>
        </nav>
    </header>

    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; {{ date('Y') }} Bản quyền thuộc về Bạn.</p>
    </footer>

</body>
</html>