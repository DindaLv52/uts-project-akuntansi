@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tabel Akuntansi Jurnal Keluar</h1>
    <a href="{{ route('tabelakuntansijurnalkeluar.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    
    <table class="table table-bordered table-striped table-primary">
      <thead>
        <tr>
            <th>Nomor Jurnal</th>
            <th>Kode Jurnal</th>
            <th>Tanggal Selesai</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tabel_akuntansi_jurnal_keluar as $item)
        <tr>
            <td>{{ $item->nomor_jurnal }}</td>
            <td>{{ $item->kode_jurnal }}</td>
            <td>{{ $item->tanggal_selesai }}</td>
            <td>
                <a href="{{ route('tabelakuntansijurnalkeluar.edit', $item->nomor_jurnal) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('tabelakuntansijurnalkeluar.destroy', $item->nomor_jurnal) }}" method="POST" style="display:inline;">
                    @csrf 
                    @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@endsection