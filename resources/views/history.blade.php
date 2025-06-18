@extends('template.sidebar')

@section('content')
<header class="bg-teal d-flex align-items-center px-4 py-2" style="background-color: #1b7772; color: white; height: 70px;">
    <div class="d-flex align-items-center">
        <h3 class="mb-0" style="font-weight: bold; font-family: 'Georgia', serif; letter-spacing: 1px;">Tealibrary</h3>
    </div>
</header>

<div class="container-fluid" style="background: url('{{ asset('img/background2.png') }}') no-repeat center center; background-size: cover; min-height: 100vh; padding: 2rem;">
    <div class="container py-4">
        <h1 class="text-center mb-5 fw-bold">History Peminjaman</h1>

        @if (session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered bg-white text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID Peminjam</th>
                        <th>Nama Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($peminjaman as $data)
                        <tr>
                            <td>{{ $data->id_peminjam }}</td>
                            <td>{{ $data->nama_peminjam }}</td>
                            <td>{{ $data->judul_buku }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->tanggal_pinjam)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->tanggal_kembali)->format('d/m/Y') }}</td>
                            <td>
                                @if ($data->status === 'Dipinjam')
                                    <span class="text-muted fw-semibold">Dipinjam</span>
                                @elseif ($data->status === 'Dikembalikan')
                                    <span class="badge bg-success">Dikembalikan</span>
                                @elseif ($data->status === 'Terlambat')
                                    <span class="badge bg-danger">Terlambat</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="6">Belum ada data peminjaman.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
