<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unggah Dokumen</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</head>

<body>
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

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
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
                                    <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- Header End -->

            <!-- Upload Form -->
            <div class="container-fluid upload-form-container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-body" >
                                <h4 class="card-title mb-4">Unggah Dokumen</h4>

                                {{-- Alert sukses --}}
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                {{-- Alert error --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{ route('unggah_dokumen.upload') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="biodata_id" value="{{ $biodata_id }}">

                                    <div class="mb-3">
                                        <label for="transkrip" class="form-label">Transkrip Nilai (PDF)</label>
                                        <input type="file" class="form-control" id="transkrip" name="file[transkrip]" accept="application/pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ijazah" class="form-label">Ijazah (PDF)</label>
                                        <input type="file" class="form-control" id="ijazah" name="file[ijazah]" accept="application/pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="akreditasi_pt" class="form-label">Akreditasi Perguruan Tinggi (PDF)</label>
                                        <input type="file" class="form-control" id="akreditasi_pt" name="file[akreditasi_pt]" accept="application/pdf">
                                    </div>
                                    <div class="mb-3">
                                        <label for="akreditasi_ps" class="form-label">Akreditasi Program Studi (PDF)</label>
                                        <input type="file" class="form-control" id="akreditasi_ps" name="file[akreditasi_ps]" accept="application/pdf">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Unggah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form -->
 <!-- Footer di sini -->

        </div> <!-- body-wrapper -->
    </div> <!-- page-wrapper -->

    <!-- Scripts -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/app.min.js"></script>

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
    var form = $(this);
    var url = form.attr('action');
    var data = form.serialize();
    // Reset alert and error
    $('#changePasswordAlert').html('');
    $('#error_current_password').text('');
    $('#error_password').text('');
    $.ajax({
      url: url,
      type: 'POST',
      data: data,
      success: function(response) {
        $('#changePasswordAlert').html('<div class="alert alert-success">Password berhasil diubah.</div>');
        form[0].reset();
      },
      error: function(xhr) {
        if(xhr.status === 422) {
          var errors = xhr.responseJSON.errors;
          if(errors.current_password) {
            $('#error_current_password').text(errors.current_password[0]);
          }
          if(errors.password) {
            $('#error_password').text(errors.password[0]);
          }
          if(xhr.responseJSON.message) {
            $('#changePasswordAlert').html('<div class="alert alert-danger">'+xhr.responseJSON.message+'</div>');
          }
        } else {
          $('#changePasswordAlert').html('<div class="alert alert-danger">Terjadi kesalahan. Silakan coba lagi.</div>');
        }
      }
    });
  });
});
</script>
</body>

</html>