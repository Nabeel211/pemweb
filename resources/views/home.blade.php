@extends('template.sidebar')

@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <div class="container-fluid" style="
        position: relative;
        background: url('{{ asset('img/harry potter.jpg') }}') no-repeat center center;
        background-size: cover;
        min-height: 100vh;
        padding: 2rem;
    ">
        <!-- Overlay transparan -->
        <div style="
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 0;
        "></div>

        <!-- Konten utama -->
        <div style="position: relative; z-index: 1; color: white;">
            <h1 class="mb-4">Cari Buku</h1>
            <form class="input-group mb-4" style="max-width: 500px;">
                <input type="text" class="form-control" placeholder="Judul Buku: Harry Potter, A Game of Thrones, and more">
                <button class="btn btn-dark" type="submit">Cari</button>
            </form>

            <div class="row mb-5">
                <div class="col-auto"><img src="{{ asset('img/game of thrones.jpg') }}" width="100" alt="Game of Thrones"></div>
                <div class="col-auto"><img src="{{ asset('img/harry potter.jpg') }}" width="100" alt="Harry Potter"></div>
                <div class="col-auto"><img src="{{ asset('img/ocean door.jpg') }}" width="100" alt="Ocean Door"></div>
                <div class="col-auto"><img src="{{ asset('img/million to one.jpg') }}" width="100" alt="Million to One"></div>
                <div class="col-auto"><img src="{{ asset('img/beloved girl.jpg') }}" width="100" alt="Beloved Girls"></div>
            </div>

            <h5><strong>Tentang Kami</strong></h5>
            <p>
                Selamat datang di Perpustakaan Tealibrary! Kami adalah pusat pengetahuan dan literasi
                yang berdedikasi untuk mendukung pembelajaran, penelitian, dan pengembangan diri masyarakat.
                Dengan koleksi ribuan buku, jurnal, dan media digital, perpustakaan kami menjadi ruang terbuka
                bagi siapa saja yang haus akan ilmu dan informasi.
            </p>

            <h4 class="mt-5">Kategori Buku</h4>
            <div class="d-flex flex-wrap gap-3 mt-3">
                @foreach(['Komik', 'Novel', 'Biografi', 'Buku Ilmiah', 'Buku Anak', 'Cerpen'] as $kategori)
                    <a href="#" class="btn btn-dark rounded-pill px-4 py-2">{{ $kategori }}</a>
                @endforeach
            </div>

            {{-- Carousel otomatis gambar buku --}}
            <div id="bookCarousel" class="carousel slide mt-5" data-ride="carousel" data-interval="3000" style="max-width: 600px; margin: auto; ">
                <div class="carousel-inner">
                    @php
                        $books = [
                            'game of thrones.jpg',
                            'harry potter.jpg',
                            'ocean door.jpg',
                            'million to one.jpg',
                            'beloved girl.jpg'
                        ];
                    @endphp

                    @foreach ($books as $index => $book)
                        <div class="carousel-item @if($index == 0) active @endif text-center">
                            <img src="{{ asset('img/' . $book) }}" 
                                alt="Buku {{ pathinfo($book, PATHINFO_FILENAME) }}"
                                style="width: 250px; height: 400px; object-fit: fit; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.5);">
                            <p class="mt-3" stle="color: white; font-weight: bold;">
                                {{ strtoupper(pathinfo($book, PATHINFO_FILENAME)) }}
                            </p>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#bookCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#bookCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection
