@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1>Home</h1>

<div class="alert alert-success">
    Selamat datang, <strong>{{ $nama }}</strong>!
</div>

<p>Ini adalah halaman Home Laravel.</p>
@endsection
