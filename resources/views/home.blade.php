@extends('layouts.app')

@section('title', 'Daftar Tabel')

@section('content')
    <div class="container">
        <h2 class="mb-4">Daftar Tabel Sistem Akuntansi</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('/djurnal') }}">Tabel DJurnal</a></li>
            <li class="list-group-item"><a href="{{ url('/hjurnal') }}">Tabel HJurnal</a></li>
            <li class="list-group-item"><a href="{{ url('/kelompok') }}">Tabel Kelompok</a></li>
            <li class="list-group-item"><a href="{{ url('/perkiraan') }}">Tabel Perkiraan</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelakuntansihistorybackup') }}">Tabel Akuntansi History Backup</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelakuntansihistorytutupbuku') }}">Tabel Akuntansi History Tutup Buku</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelakuntansijurnalkeluar') }}">Tabel Akuntansi Jurnal Keluar</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelakuntansijurnalmasuk') }}">Tabel Akuntansi Jurnal Masuk</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelakuntansijurnalumum') }}">Tabel Akuntansi Jurnal Umum</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelakuntansimaster') }}">Tabel Akuntansi Master</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelakuntansitransaksi') }}">Tabel Akuntansi Transaksi</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelindukuser') }}">Tabel Induk User</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelsetupglperiode') }}">Tabel Setup Gl Periode</a></li>
            <li class="list-group-item"><a href="{{ url('/tabelsetupglperkiraan') }}">Tabel Setup Gl Perkiraan</a></li>
            <li class="list-group-item"><a href="{{ url('/tperiode') }}">Tabel TPeriode</a></li>
            <li class="list-group-item"><a href="{{ url('/tperkiraan') }}">Tabel TPerkiraan</a></li>
            <li class="list-group-item"><a href="{{ url('/tuser') }}">Tabel User</a></li>
        </ul>
    </div>
@endsection