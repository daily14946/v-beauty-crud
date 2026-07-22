<!DOCTYPE html>
<html>
<head>

<title>Tambah Produk</title>

<style>

body{
    font-family:Arial;
    background:#ffeef7;
}

.container{
    width:600px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 20px rgba(0,0,0,.1);
}

h2{
    text-align:center;
    color:#e91e63;
}

input,textarea{
    width:100%;
    padding:12px;
    margin-top:10px;
    margin-bottom:20px;
    border:1px solid #ccc;
    border-radius:10px;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:10px;
    background:#ff5fa2;
    color:white;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#e91e63;
}

</style>

</head>

<body>

<div class="container">

<h2>Tambah Produk</h2>

<form action="/posts" method="POST">

@csrf

<label>Judul</label>

<input type="text" name="judul">

<label>Isi</label>

<textarea name="isi"></textarea>

<button>Simpan</button>

</form>

</div>

</body>
</html>