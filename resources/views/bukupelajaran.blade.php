@extends('template.sidebar')

@section('content')
<style>
    .comic-card img {
        width: 120px;
        height: 180px;
        object-fit: cover;
        border-radius: 6px;
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
</style>

<div class="container-fluid" style="
    position: relative;
    background: url('{{ asset('img/background.png') }}') no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    padding: 2rem;
">
<!-- Overlay -->
    <div style="
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 0;
        ">
    </div>
    <div style="position: relative; z-index: 1;">
        <h2 class="text-center mb-4" style="font-weight: bold;">Buku Pelajaran</h2>

        <div class="row justify-content-center">
            @php
                $komikList = [
                    ['img' => 'beloved girl.jpg', 'title' => 'Detektif Conan', 'chapter' => '1000', 'rating' => '8/10'],
                    ['img' => 'game of thrones.jpg', 'title' => 'Spy X Family', 'chapter' => '70', 'rating' => '9/10'],
                    ['img' => 'harry potter.jpg', 'title' => 'The Apothecary Diaries', 'chapter' => '100', 'rating' => '8/10'],
                    ['img' => 'million to one.jpg', 'title' => 'Kimetsu no Yaiba', 'chapter' => '100', 'rating' => '8/10'],
                    ['img' => 'ocean door.jpg', 'title' => 'One Piece', 'chapter' => '1000', 'rating' => '8/10'],
                ];
            @endphp

            @for ($i = 0; $i < 4; $i++) {{-- Loop baris --}}
                @foreach ($komikList as $komik)
                    <div class="col-6 col-sm-4 col-md-2 text-center mb-4 comic-card">
                        <img src="{{ asset('img/' . $komik['img']) }}" alt="{{ $komik['title'] }}">
                        <div class="comic-title">{{ $komik['title'] }}</div>
                        <div class="comic-info">Chapter {{ $komik['chapter'] }}</div>
                        <div class="comic-info">Rating {{ $komik['rating'] }}</div>
                    </div>
                @endforeach
            @endfor
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-between align-items-center mt-4">
            <a href="#" class="btn btn-outline-secondary">&lt; Previous</a>
            <div>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>...</span>
                <span>99</span>
            </div>
            <a href="#" class="btn btn-outline-secondary">Next &gt;</a>
        </div>
    </div>
</div>
@endsection
