<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIAKAD ITEBA')</title>
    <link rel="stylesheet" href="/assets/css/styles.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body style="background: #f8fafc; min-height: 100vh;">
    <div class="container py-5">
        @yield('content')
    </div>
    <footer class="text-center mt-5 mb-3 text-muted">
        <small>Design and Developed by Insyaallah S.KOM</small>
    </footer>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 