@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form action="{{ route('tabelindukuser.update', $item->id_user) }}" method="POST">
        @csrf
        @method('PUT')
        @include('tabelindukuser.form')
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection