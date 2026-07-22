@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<h2>Edit Post</h2>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="{{ $post->judul }}">
    </div>

    <div class="mb-3">
        <label>Isi</label>
        <textarea name="isi" class="form-control" rows="5">{{ $post->isi }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">
        Kembali
    </a>
</form>
@endsection