<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Menampilkan seluruh data post.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Menampilkan form tambah post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Menyimpan data post baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Post::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail post.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Menampilkan form edit.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Mengupdate data post.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        $post->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post berhasil diperbarui.');
    }

    /**
     * Menghapus data post.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post berhasil dihapus.');
    }
}