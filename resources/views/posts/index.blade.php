@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')
<h2>Daftar Post</h2>

<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">
    Tambah Post
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->judul }}</td>
            <td>{{ $post->isi }}</td>
            <td>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('posts.destroy', $post->id) }}"
                      method="POST"
                      style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus data?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center">
                Belum ada data.
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection