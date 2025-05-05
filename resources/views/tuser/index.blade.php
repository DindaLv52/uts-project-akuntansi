@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Tabel TUser</h1>
    <a href="{{ route('tuser.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered table-striped table-primary">
        <thead>
            <tr>
                <th>ID User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($t_user as $row)
                <tr>
                    <td>{{ $row->id_user }}</td>
                    <td>{{ $row->user_name }}</td>
                    <td>{{ $row->password }}</td>
                    <td>{{ $row->level }}</td>
                    <td>
                        <a href="{{ route('tuser.edit', $row->id_user) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('tuser.destroy', $row->id_user) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection