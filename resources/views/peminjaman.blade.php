@extends('template.sidebar')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-5 fw-bold">Pinjam Buku</h1>
    
    <form class="row g-4 justify-content-center">
        <div class="col-md-5">
            <label class="form-label text-muted">Judul Buku</label>
            <input type="text" class="form-control bg-light-subtle" placeholder="Harry Potter, A Game of Thrones, and more">
        </div>

        <div class="col-md-5">
            <label class="form-label text-muted">Tanggal Pinjam</label>
            <input type="date" class="form-control bg-light-subtle">
        </div>

        <div class="col-md-5">
            <label class="form-label text-muted">Nama Peminjam</label>
            <input type="text" class="form-control bg-light-subtle" placeholder="Nama Anda">
        </div>

        <div class="col-md-5">
            <label class="form-label text-muted">Tanggal Kembali</label>
            <input type="date" class="form-control bg-light-subtle">
        </div>

        <div class="col-md-5">
            <label class="form-label text-muted">ID Peminjam</label>
            <input type="text" class="form-control bg-light-subtle" placeholder="ID Anda">
        </div>

        <div class="col-md-5 d-flex align-items-end">
            <button type="submit" class="btn btn-secondary fw-bold">
                Pinjam Buku
            </button>
        </div>
    </form>
</div>
@endsection
