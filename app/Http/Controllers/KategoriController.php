<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function komik()
    {
        return view('kategori.komik',);
    }

    public function novel()
    {
        return view('kategori.novel');
    }

    public function biografi()
    {
        return view('kategori.biografi');
    }

    public function ilmiah()
    {
        return view('kategori.ilmiah');
    }

    public function cerpen()
    {
        return view('kategori.cerpen');
    }
}
