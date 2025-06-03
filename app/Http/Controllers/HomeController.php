<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; // Pastikan model 'Buku' sesuai dengan struktur kamu

class HomeController extends Controller
{
    /**
     * Tampilkan halaman beranda dengan list buku untuk carousel.
     */
    public function index()
    {
        $buku = Buku::all(); // Ambil semua buku dari database

        return view('home', compact('buku'));
    }
}
