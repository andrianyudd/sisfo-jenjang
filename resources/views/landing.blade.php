<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD ITEBA - Sistem Informasi Alih Jenjang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: #f8fafc;
        }
        .hero-section {
            background: url('/assets/images/bg-iteba.jpg') center center/cover no-repeat;
            color: #fff;
            min-height: 100vh;
            position: relative;
        }
        .overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 41, 102, 0.8);
            z-index: 0;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 3rem;
        }
        .hero-logo {
            width: 200px;
            margin-bottom: 2rem;
        }
        .btn-custom {
            border-radius: 8px;
            padding: 12px 30px;
            font-weight: 600;
        }
        .feature-card {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            height: 100%;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row min-vh-100">
        <!-- Left: Hero Section -->
        <div class="col-lg-6 d-flex align-items-center hero-section p-0">
            <div class="overlay"></div>
            <div class="hero-content w-100">
                <img src="/assets/images/logo-iteba.png" alt="ITEBA" class="hero-logo">
                <h1 class="display-4 fw-bold mb-4">Sistem Informasi Alih Jenjang</h1>
                <p class="lead mb-4">Platform digital untuk memudahkan proses alih jenjang mahasiswa di Institut Teknologi Batam (ITEBA).</p>
                <div class="d-flex gap-3">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-custom">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-custom">Register</a>
                </div>
            </div>
        </div>
        <!-- Right: Features -->
        <div class="col-lg-6 d-flex align-items-center bg-white">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="feature-card">
                            <div class="text-center mb-3">
                                <i class="bi bi-person-circle fs-1 text-primary"></i>
                            </div>
                            <h5 class="text-center mb-3">Biodata Mahasiswa</h5>
                            <p class="text-muted text-center">Kelola data pribadi dan informasi akademik dengan mudah dan aman.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card">
                            <div class="text-center mb-3">
                                <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
                            </div>
                            <h5 class="text-center mb-3">Unggah Dokumen</h5>
                            <p class="text-muted text-center">Upload dokumen pendukung seperti transkrip, ijazah, dan sertifikat akreditasi.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card">
                            <div class="text-center mb-3">
                                <i class="bi bi-graph-up fs-1 text-primary"></i>
                            </div>
                            <h5 class="text-center mb-3">Pengajuan Konversi</h5>
                            <p class="text-muted text-center">Ajukan konversi mata kuliah dengan sistem yang terintegrasi.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-card">
                            <div class="text-center mb-3">
                                <i class="bi bi-check-circle fs-1 text-primary"></i>
                            </div>
                            <h5 class="text-center mb-3">Hasil Konversi</h5>
                            <p class="text-muted text-center">Lihat status dan hasil konversi mata kuliah secara real-time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 