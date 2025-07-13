<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biodata Mahasiswa</title>
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <div class="sidebar-logo-container">
                        <img src="/assets/images/logo-iteba.png" alt="Logo" class="sidebar-logo">
                    </div>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/" aria-expanded="false">
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
                            <a class="sidebar-link" href="#" aria-expanded="false">
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
                            <a class="sidebar-link" href="#" aria-expanded="false">
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
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="#" class="d-flex align-items-center gap-2 dropdown-item" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                            <i class="ti ti-lock fs-6"></i>
                                            <p class="mb-0 fs-3">Ubah Password</p>
                                        </a>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Header End -->

            <!-- Form Biodata -->
            <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="row w-100 justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Form Biodata Mahasiswa</h4>
                                @if(session('success'))
                                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                @endif
                                @if($errors->any())
                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $errors->first() }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                  </div>
                                @endif
                                <form action="{{ route('biodata.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="{{ old('nama', $biodata->nama ?? auth()->user()->name) }}" placeholder="Masukkan nama lengkap" required>
                                        @error('nama')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email', $biodata->email ?? auth()->user()->email) }}" placeholder="Masukkan Email" required>
                                        @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="prodi" class="form-label">Program Studi</label>
                                        <select class="form-select" id="prodi" name="prodi">
                                            <option selected disabled>Pilih Prodi</option>
                                            <option value="Sistem Informasi" {{ old('prodi', $biodata->prodi ?? '') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                                            <option value="Teknik Komputer" {{ old('prodi', $biodata->prodi ?? '') == 'Teknik Komputer' ? 'selected' : '' }}>Teknik Komputer</option>
                                            <option value="Matematika" {{ old('prodi', $biodata->prodi ?? '') == 'Matematika' ? 'selected' : '' }}>Matematika</option>
                                        </select>
                                        @error('prodi')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>



                                    <div class="mb-3">
                                        <label for="nohp" class="form-label">Nomor HP</label>
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="08xxxxxxxxxx" value="{{ old('nohp', $biodata->nohp ?? '') }}" required>
                                        @error('nohp')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Form -->
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