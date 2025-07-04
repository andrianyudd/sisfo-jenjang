<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login :: SIAKAD ITEBA</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: #f8fafc;
        }
        .login-left {
            background: url('/assets/images/bg-iteba.jpg') center center/cover no-repeat;
            color: #fff;
            min-height: 100vh;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 41, 102, 0.7);
            z-index: 0;
        }
        .login-left-content {
            position: relative;
            z-index: 2;
            padding: 3rem;
        }
        .login-logo {
            width: 180px;
            margin-bottom: 2rem;
        }
        .news-list {
            margin-top: 2rem;
        }
        .news-item {
            margin-bottom: 1.5rem;
        }
        .login-form {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
        }
        .login-form .form-control {
            border-radius: 8px;
        }
        .login-form .btn-primary {
            border-radius: 8px;
        }
        .login-form .form-check-label {
            font-size: 0.95rem;
        }
        .login-footer {
            font-size: 0.95rem;
            margin-top: 1.5rem;
            text-align: center;
        }
        @media (max-width: 991.98px) {
            .login-left {
                min-height: 300px;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row min-vh-100">
        <!-- Left: News & Info -->
        <div class="col-lg-6 d-none d-lg-block login-left p-0">
            <div class="overlay"></div>
            <div class="w-100 d-flex flex-column align-items-start" style="position:relative; z-index:2; padding: 2.5rem 3rem 0 3rem;">
                <img src="/assets/images/logo-iteba.png" alt="ITEBA" class="login-logo mb-4" style="width: 180px;">
            </div>
        </div>
        <!-- Right: Login Form -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center bg-white">
            <form class="login-form w-100" method="POST" action="{{ route('login') }}">
                @csrf
                <h3 class="mb-4 text-center fw-bold">Login</h3>
                @if($errors->any())
                    <div class="alert alert-danger">{{ $errors->first() }}</div>
                @endif
                <div class="mb-3">
                <input type="text" name="email" class="form-control" placeholder="NIM / NIP / Email" required autofocus>
                </div>
                <div class="mb-3 position-relative">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
