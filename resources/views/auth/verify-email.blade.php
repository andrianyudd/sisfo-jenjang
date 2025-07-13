<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email :: SIAKAD ITEBA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: #f8fafc;
        }
        .verify-form {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            margin-top: 7vh;
        }
        .verify-logo {
            width: 120px;
            margin-bottom: 1.5rem;
        }
        .btn-custom {
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="verify-form w-100">
        <div class="text-center mb-4">
            <img src="/assets/images/logo-iteba.png" alt="ITEBA" class="verify-logo">
            <h3 class="fw-bold mb-2">Verifikasi Email</h3>
        </div>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <p class="mb-4 text-center">
            Sebelum melanjutkan, silakan cek email Anda dan klik link verifikasi yang telah dikirim.<br>
            Jika Anda belum menerima email, klik tombol di bawah untuk mengirim ulang.
        </p>
        <form method="POST" action="{{ route('verification.send') }}" class="mb-3">
            @csrf
            <button type="submit" class="btn btn-primary w-100 btn-custom">Kirim Ulang Email Verifikasi</button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-secondary w-100 btn-custom">Logout</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 