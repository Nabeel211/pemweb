<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('pinjam-buku'); // form peminjaman
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date|after_or_equal:tanggal_pinjam',
            'nama_peminjam' => 'required',
            'id_peminjam' => 'required',
        ]);
        
        // Cek apakah buku sedang dipinjam (status masih "Dipinjam")
        $isDipinjam = Peminjaman::where('judul_buku', $request->judul_buku)
                        ->where('status', 'Dipinjam')
                        ->exists();
        
        if ($isDipinjam) {
            return redirect()->back()->with('error', 'Buku sedang dipinjam, silakan tunggu hingga dikembalikan.');
        }
        
        // Jika tidak sedang dipinjam, simpan data
        Peminjaman::create($request->all());
        
        return redirect()->route('history')->with('success', 'Peminjaman berhasil disimpan!');
    }
    public function history()
        {
            $peminjaman = \App\Models\Peminjaman::orderBy('created_at', 'desc')->get();
            return view('history', compact('peminjaman'));
        }
}