@extends('template.sidebar')

@section('content')
<header class="bg-teal d-flex align-items-center px-4 py-2" style="background-color: #1b7772; color: white; height: 70px;">
    <div class="d-flex align-items-center">
        <h3 class="mb-0" style="font-weight: bold; font-family: 'Georgia', serif; letter-spacing: 1px;">Tealibrary</h3>
    </div>
</header>

<style>
    .comic-card img {
        width: 100px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    .comic-title {
        font-weight: bold;
        margin-top: 0.5rem;
    }
    .comic-info {
        font-size: 0.9rem;
        color: #555;
    }
    .comic-wrapper {
        background-color: rgba(230, 228, 228, 0.95);
        border-radius: 15px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(2px);
        padding-top: 3rem !important;
    }
</style>

<div class="container-fluid" style="
    position: relative;
    background: url('{{ asset('img/background2.png') }}') no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    padding: 2rem;
">

<div style="position: relative; z-index: 1;">
    <h1 class="text-center mb-4" style="font-weight: bold;">Komik</h1>
    <!-- Kotak besar pembungkus semua komik -->
    <div class="comic-wrapper p-4">
        <div class="row justify-content-center">
            @foreach ($komikList as $komik)
                <div class="text-center mb-4 comic-card d-inline-block" style="width: 20%;">
                    <img src="{{ asset('img/' . $komik['img']) }}" alt="{{ $komik['title'] }}">
                    <div class="comic-details mt-2 px-2 py-2">
                        <div class="comic-title">{{ $komik['title'] }}</div>
                        <div class="comic-info">Chapter {{ $komik['chapter'] }}</div>
                        <div class="comic-info">Rating {{ $komik['rating'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-end mt-4">
            {{ $komikList->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
