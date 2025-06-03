@extends('template.sidebar')

@section('content')
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
