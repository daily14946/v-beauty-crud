<!DOCTYPE html>
<html>
<head>
    <title>V-Beauty Inventory</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#ffeef7;
            margin:40px;
        }

        .container{
            width:900px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,.1);
        }

        h2{
            color:#e91e63;
            text-align:center;
        }

        .btn{
            display:inline-block;
            background:#ff5fa2;
            color:white;
            padding:10px 18px;
            border-radius:10px;
            text-decoration:none;
            margin-bottom:20px;
            font-weight:bold;
        }

        .btn:hover{
            background:#e91e63;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#ff5fa2;
            color:white;
            padding:12px;
        }

        td{
            padding:10px;
            border-bottom:1px solid #ddd;
            text-align:center;
        }

        tr:nth-child(even){
            background:#fff4f8;
        }

        .edit{
            color:#ff1493;
            font-weight:bold;
            text-decoration:none;
        }

        .delete{
            background:#ff4d6d;
            color:white;
            border:none;
            padding:6px 12px;
            border-radius:8px;
            cursor:pointer;
        }

        .delete:hover{
            background:#d90429;
        }
    </style>

</head>

<body>

<div class="container">

<h2>🌸 V-Beauty Inventory 🌸</h2>

<a href="/posts/create" class="btn">
+ Tambah Produk
</a>

<table>

<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Isi</th>
    <th>Aksi</th>
</tr>

@foreach($posts as $post)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $post->judul }}</td>

<td>{{ $post->isi }}</td>

<td>

<a class="edit" href="/posts/{{ $post->id }}/edit">
✏ Edit
</a>

<form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">

@csrf
@method('DELETE')

<button class="delete">
🗑 Hapus
</button>

</form>

</td>

</tr>

@endforeach

</table>

</div>

</body>
</html>