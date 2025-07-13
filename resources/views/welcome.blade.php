<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Alih Jenjang ITEBA</title>
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/styles.min.css" />
</head>

<body class="dashboard-page">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <div class="sidebar-logo-container">
                    <a href="{{ route('dashboard') }}" class="text-decoration-none">
                        <img src="/assets/images/logo-iteba.png" alt="Logo" class="sidebar-logo">
                    </a>
                </div>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-menu-2"></i>
                </div>
            </div>
            <!-- Sidebar navigation -->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                            <span><iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                        <span class="hide-menu">Mahasiswa</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('biodata') }}" aria-expanded="false">
                            <span><iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Biodata</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('unggah_dokumen') }}" aria-expanded="false">
                            <span><iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Unggah Dokumen</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                            <span><iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Hasil Konversi</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">ADMIN</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('mata_kuliah.index') }}" aria-expanded="false">
                            <span><iconify-icon icon="solar:sticker-smile-circle-2-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Mata Kuliah</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('konversi.index') }}" aria-expanded="false">
                            <span><iconify-icon icon="solar:planet-3-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Pengajuan Konversi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                            <span><iconify-icon icon="solar:planet-3-bold-duotone" class="fs-6"></iconify-icon></span>
                            <span class="hide-menu">Tabel Hasil Konversi</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header w-100" style="background:transparent; position:relative; z-index:1050;">
        <div class="d-flex align-items-center justify-content-between w-100 px-0 py-2" style="min-height:60px;">
          <div class="d-flex align-items-center gap-2">
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-menu-2"></i>
            </div>
          </div>
          <div class="dropdown">
            <a href="#" class="d-block" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="/assets/images/profile/user-1.jpg" alt="Profile" width="40" height="40" class="rounded-circle">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
              <li>
                <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                  <i class="ti ti-lock fs-6"></i> Ubah Password
                </a>
              </li>
              <li>
                <form action="{{ route('logout') }}" method="POST" class="px-3 py-2">
                  @csrf
                  <button type="submit" class="btn btn-outline-primary w-100">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <!--  Header End -->
      
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <div class="container" style="max-width:1300px;">
          <div class="row mb-4">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Selamat Datang, {{ auth()->user()->name }}!</h4>
                  <p class="card-text">Selamat datang di Sistem Informasi Alih Jenjang ITEBA. Silakan gunakan menu di sidebar untuk mengakses fitur-fitur yang tersedia.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Card Dashboard -->
          <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card text-white bg-primary h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h2 class="card-title mb-1 text-white">150</h2>
                    <p class="card-text">Mahasiswa</p>
                  </div>
                  <a href="#" class="btn btn-sm btn-light mt-2">More info</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card text-white bg-success h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h2 class="card-title mb-1 text-white">53</h2>
                    <p class="card-text text-white">Belum Diproses</p>
                  </div>
                  <a href="#" class="btn btn-sm btn-light mt-2">More info</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card text-white bg-warning h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h2 class="card-title mb-1 text-white">44</h2>
                    <p class="card-text">Proses</p>
                  </div>
                  <a href="#" class="btn btn-sm btn-light mt-2">More info</a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <div class="card text-white bg-danger h-100">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h2 class="card-title mb-1 text-white">65</h2>
                    <p class="card-text text-white">Sudah Selesai</p>
                  </div>
                  <a href="#" class="btn btn-sm btn-light mt-2">More info</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

<!-- Modal Ubah Password -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changePasswordModalLabel">Ubah Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="changePasswordAlert"></div>
        <form id="changePasswordForm" method="POST" action="{{ route('profile.password.update') }}">
          @csrf
          <div class="mb-3">
            <label>Password Lama</label>
            <input type="password" name="current_password" class="form-control" required>
            <small class="text-danger" id="error_current_password"></small>
          </div>
          <div class="mb-3">
            <label>Password Baru</label>
            <input type="password" name="password" class="form-control" required>
            <small class="text-danger" id="error_password"></small>
          </div>
          <div class="mb-3">
            <label>Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Ubah Password</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  $('#changePasswordForm').on('submit', function(e) {
    e.preventDefault();
    var $form = $(this);
    var $alert = $('#changePasswordAlert');
    $alert.html(''); // Bersihkan alert

    $.ajax({
      url: $form.attr('action'),
      method: 'POST',
      data: $form.serialize(),
      success: function(response) {
        // Tampilkan alert sukses di dalam modal
        $alert.html('<div class="alert alert-success alert-dismissible fade show" role="alert">'
          + (response.message || 'Password berhasil diubah!') +
          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        $form[0].reset();
        // Opsional: tutup modal setelah 2 detik
        setTimeout(function() {
          $('#changePasswordModal').modal('hide');
          $alert.html('');
        }, 2000);
      },
      error: function(xhr) {
        // Tampilkan error di dalam modal
        var msg = 'Terjadi kesalahan.';
        if (xhr.responseJSON && xhr.responseJSON.message) {
          msg = xhr.responseJSON.message;
        }
        $alert.html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'
          + msg +
          '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
      }
    });
  });
});
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    function updateSidebarIcon() {
      const isMobile = window.innerWidth < 1200;
      document.querySelectorAll('.sidebartoggler').forEach(function(togglerBtn) {
        let icon = togglerBtn.querySelector('i');
        if (!icon) {
          icon = document.createElement('i');
          togglerBtn.appendChild(icon);
        }
        const mainWrapper = document.getElementById('main-wrapper');
        if (isMobile && mainWrapper && mainWrapper.classList.contains('show-sidebar')) {
          icon.className = 'ti ti-x';
        } else {
          icon.className = 'ti ti-menu-2';
        }
      });
    }
    document.querySelectorAll('.sidebartoggler').forEach(function(togglerBtn) {
      togglerBtn.addEventListener('click', function() {
        setTimeout(updateSidebarIcon, 10);
      });
    });
    window.addEventListener('resize', updateSidebarIcon);
    updateSidebarIcon();
  });
</script>
</body>

</html>