<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mata Kuliah</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</head>

<body>
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
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-6"></i><span class="hide-menu">Home</span></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="/" aria-expanded="false"><span><iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon></span><span class="hide-menu">Dashboard</span></a></li>
                        <li class="nav-small-cap"><i class="ti ti-dots nav-small-cap-icon fs-6"></i><span class="hide-menu">Mahasiswa</span></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('biodata') }}" aria-expanded="false"><span><iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon></span><span class="hide-menu">Biodata</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('unggah_dokumen') }}" aria-expanded="false"><span><iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon></span><span class="hide-menu">Unggah Dokumen</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#" aria-expanded="false"><span><iconify-icon icon="solar:bookmark-square-minimalistic-bold-duotone" class="fs-6"></iconify-icon></span><span class="hide-menu">Hasil Konversi</span></a></li>
                        <li class="nav-small-cap"><iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon><span class="hide-menu">ADMIN</span></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('mata_kuliah.index') }}" aria-expanded="false"><span><iconify-icon icon="solar:sticker-smile-circle-2-bold-duotone" class="fs-6"></iconify-icon></span><span class="hide-menu">Mata Kuliah</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('konversi.index') }}" aria-expanded="false"><span><iconify-icon icon="solar:planet-3-bold-duotone" class="fs-6"></iconify-icon></span><span class="hide-menu">Pengajuan Konversi</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="#" aria-expanded="false"><span><iconify-icon icon="solar:planet-3-bold-duotone" class="fs-6"></iconify-icon></span><span class="hide-menu">Tabel Hasil Konversi</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- Sidebar End -->

        <!-- Main Wrapper -->
        <div class="body-wrapper">
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>

            <div class="container-fluid py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Form Konversi Nilai Mahasiswa</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Nama Mahasiswa</label>
                                            <input type="text" class="form-control" value="{{ $biodata->nama }}" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">NIM</label>
                                            <input type="text" class="form-control" value="{{ $biodata->nim }}" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Program Studi</label>
                                            <input type="text" class="form-control" value="{{ $biodata->prodi }}" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Transkrip Nilai</label><br>
                                        <a href="#" class="btn btn-sm btn-outline-secondary">Lihat File Transkrip</a>
                                    </div>

                                    <hr>

                                    <h5>Mapping Mata Kuliah</h5>
                                    <div id="mapping-container">
                                        <div class="row g-2 mb-2">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="MK Lama">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" placeholder="Nilai">
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-select" name="mata_kuliah_id" id="mata_kuliah_id" required>
                                                    <option disabled selected>Pilih MK Tujuan</option>
                                                    @foreach ($mataKuliah as $mk)
                                                    <option value="{{ $mk->id }}">{{ $mk->kode_mk }} - {{ $mk->nama_mk }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control" placeholder="SKS">
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" class="btn btn-danger w-100" onclick="this.parentElement.parentElement.remove()">X</button>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-success mb-3" onclick="addMapping()">+ Tambah Mapping</button>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Simpan Konversi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function addMapping() {
            const container = document.getElementById('mapping-container');
            const row = document.createElement('div');
            row.className = 'row g-2 mb-2';
            row.innerHTML = `
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="MK Lama">
        </div>
        <div class="col-md-2">
          <input type="text" class="form-control" placeholder="Nilai">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="MK Baru Tujuan">
        </div>
        <div class="col-md-2">
          <input type="number" class="form-control" placeholder="SKS">
        </div>
        <div class="col-md-1">
          <button type="button" class="btn btn-danger w-100" onclick="this.parentElement.parentElement.remove()">X</button>
        </div>
      `;
            container.appendChild(row);
        }
    </script>
</body>

</html>