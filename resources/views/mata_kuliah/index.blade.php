<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mata Kuliah</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
    >
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
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
                                <h4 class="mb-0">Master Data Mata Kuliah</h4>
                            </div>
                            <div class="card-body">
                                @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                <form action="{{ route('mata_kuliah.store') }}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="kode" placeholder="Kode MK" required>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama Mata Kuliah" required>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="number" class="form-control" name="sks" placeholder="SKS" min="1" required>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-primary w-100">Tambah</button>
                                        </div>
                                    </div>
                                </form>

                                <hr class="my-4">

                                <table class="table table-bordered table-striped">
                                    <thead class="table-light">
                                        <tr>
                                            <th>No</th>
                                            <th>Kode MK</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mata_kuliah as $index => $mk)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $mk->kode }}</td>
                                            <td>{{ $mk->nama }}</td>
                                            <td>{{ $mk->sks }}</td>
                                            <td class="d-flex">
                                                <button type="button" class="btn btn-warning btn-sm me-2" onclick="openEditModal('{{ $mk->id }}', '{{ $mk->kode }}', '{{ $mk->nama }}', '{{ $mk->sks }}')">
                                                    Edit
                                                </button>

                                                <form action="{{ route('mata_kuliah.destroy', $mk->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="editModalLabel">Edit Mata Kuliah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Kode MK</label>
                            <input type="text" class="form-control" id="edit-kode" name="kode" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" id="edit-nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">SKS</label>
                            <input type="number" class="form-control" id="edit-sks" name="sks" required min="1">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openEditModal(id, kode, nama, sks) {
            const form = document.getElementById('editForm');
            form.action = `/mata_kuliah/${id}`; // Ubah sesuai route update kamu
            document.getElementById('edit-kode').value = kode;
            document.getElementById('edit-nama').value = nama;
            document.getElementById('edit-sks').value = sks;

            const modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }
    </script>
</body>

</html>