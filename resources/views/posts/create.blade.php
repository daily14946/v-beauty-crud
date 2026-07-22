@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')
<h2>Tambah Post</h2>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control">
    </div>

    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="5"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Simpan
    </button>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</form>
@endsection