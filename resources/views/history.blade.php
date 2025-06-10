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
    padding: 2rem;
    top: 0; left: 0; right: 0; bottom: 0;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 0;
">

<div class="container py-4">
    <h1 class="text-center mb-5 fw-bold">History Peminjaman</h1>
    
    <div class="table-responsive">
        <table class="table table-bordered bg-white text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>012345</td>
                    <td>Muhammad Budi</td>
                    <td>30/04/2025</td>
                    <td>07/05/2025</td>
                    <td><span class="badge bg-success">Dikembalikan</span></td>
                </tr>
                <tr>
                    <td>012346</td>
                    <td>Muhammad Andi</td>
                    <td>30/04/2025</td>
                    <td>21/05/2025</td>
                    <td><span class="text-muted fw-semibold">Dipinjam</span></td>
                </tr>
                <tr>
                    <td>012347</td>
                    <td>Muhammad Rusdi</td>
                    <td>30/04/2025</td>
                    <td>21/05/2025</td>
                    <td><span class="text-muted fw-semibold">Dipinjam</span></td>
                </tr>
                <tr>
                    <td>012348</td>
                    <td>Muhammad Rendi</td>
                    <td>30/04/2025</td>
                    <td>21/05/2025</td>
                    <td><span class="text-muted fw-semibold">Dipinjam</span></td>
                </tr>
                <tr>
                    <td>012349</td>
                    <td>Muhammad Budianto</td>
                    <td>30/04/2025</td>
                    <td>21/05/2025</td>
                    <td><span class="badge bg-danger">Terlambat</span></td>
                </tr>
                <tr>
                    <td>012350</td>
                    <td>Muhammad Rusdianto</td>
                    <td>30/04/2025</td>
                    <td>07/05/2025</td>
                    <td><span class="badge bg-success">Dikembalikan</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
