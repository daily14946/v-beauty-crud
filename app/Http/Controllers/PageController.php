<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $nama = 'Mahasiswa Semester 4';
        return view('home', compact('nama'));
    }

    public function about()
    {
        return view('about');
    }
}