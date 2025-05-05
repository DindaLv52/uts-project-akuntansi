@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tabel Induk User</h2>
    <a href="{{ route('tabelindukuser.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama Lengkap</th>
                <th>Asal Kantor</th>
                <th>Kode CU</th>
                <th>Email</th>
                <th>Level</th>
                <th>Divisi</th>
                <th>Publish</th>
                <th>Tgl Daftar</th>
                <th>Tgl Login</th>
                <th>Status Login</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tabel_induk_user as $item)
            <tr>
                <td>{{ $item->id_user }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->asal_kantor }}</td>
                <td>{{ $item->kode_cu }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->leveluser }}</td>
                <td>{{ $item->divisi }}</td>
                <td>{{ $item->publish }}</td>
                <td>{{ $item->tgldaftar }}</td>
                <td>{{ $item->tgllogin }}</td>
                <td>{{ $item->statuslogin }}</td>
                <td>
                    <a href="{{ route('tabelindukuser.edit', $item->id_user) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('tabelindukuser.destroy', $item->id_user) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection