<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = [
        'judul_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'nama_peminjam',
        'id_peminjam',
        'status'
    ];
}