<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistem Akuntansi')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="flex-grow-1 p-2" style="margin-left: 250px;">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 250px; height: 100vh; position: fixed; top: 0; left: 0;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 text-white text-decoration-none">
            <span class="fs-4 fw-bold">Dinda Olivia</span>
        </a>
        <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="/" class="nav-link text-white">
                    <i class="bi bi-house-door-fill me-2"></i> Dashboard
                </a>
            </li>

            <!-- Dropdown for Tabel -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="tabelDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-table me-2"></i> Tabel
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="tabelDropdown">
                    <li><a class="dropdown-item" href="{{ route('djurnal.index') }}">Tabel Djurnal</a></li>
                    <li><a class="dropdown-item" href="{{ url('/hjurnal') }}">Tabel Hjurnal</a></li>
                    <li><a class="dropdown-item" href="{{ url('/kelompok') }}">Tabel Kelompok</a></li>
                    <li><a class="dropdown-item" href="{{ url('/perkiraan') }}">Tabel Perkiraan</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelakuntansihistorybackup') }}">Tabel Akuntansi History Backup</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelakuntansihistorytutupbuku') }}">Tabel Akuntansi History Tutup Buku</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelakuntansijurnalumum') }}">Tabel Akuntansi Jurnal Umum</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelakuntansijurnalmasuk') }}">Tabel Akuntansi Jurnal Masuk</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelakuntansijurnalkeluar') }}">Tabel Akuntansi Jurnal Keluar</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelakuntansimaster') }}">Tabel Akuntansi Master</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelakuntansitransaksi') }}">Tabel Akuntansi Transaksi</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tabelindukuser') }}">Tabel Induk User</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tperiode') }}">Tabel TPeriode</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tperkiraan') }}">Tabel TPerkiraan</a></li>
                    <li><a class="dropdown-item" href="{{ url('/tuser') }}">Tabel TUser</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>
</div>

<!-- Bootstrap JS & Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
