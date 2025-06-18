@extends('template.sidebar')

@section('content')
<header class="bg-teal d-flex align-items-center px-4 py-2" style="background-color: #1b7772; color: white; height: 70px;">
    <div class="d-flex align-items-center">
        <h3 class="mb-0" style="font-weight: bold; font-family: 'Georgia', serif; letter-spacing: 1px;">Tealibrary</h3>
    </div>
</header>

<div class="container-fluid" style="
    position: relative;
    background: url('{{ asset('img/background2.png') }}') no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    padding: 0; /* ubah dari 2rem jadi 0 */
">
<div class="container py-4">
    <h1 class="text-center mb-5 fw-bold">Pinjam Buku</h1>
    @if (session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif
    
    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
    
    <form action="{{ route('peminjaman.store') }}" method="POST" class="row g-4 justify-content-center">
        @csrf
        <div class="col-md-5">
            <label class="form-label text-muted">Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control bg-light-subtle" placeholder="Judul Buku">
        </div>
        
        <div class="col-md-5">
            <label class="form-label text-muted">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control bg-light-subtle">
        </div>
        
        <div class="col-md-5">
            <label class="form-label text-muted">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="form-control bg-light-subtle" placeholder="Nama Anda">
        </div>
        
        <div class="col-md-5">
            <label class="form-label text-muted">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control bg-light-subtle">
        </div>
        
        <div class="col-md-5">
            <label class="form-label text-muted">ID Peminjam</label>
            <input type="text" name="id_peminjam" class="form-control bg-light-subtle" placeholder="ID Anda">
        </div>
        
        <div class="col-md-5 d-flex align-items-end">
            <button type="submit" class="btn btn-secondary fw-bold">Pinjam Buku</button>
        </div>
    </form>
</div>
@endsection
