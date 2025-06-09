@extends('template.sidebar')
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
            }

            .book-slider-container {
                position: relative;
                max-width: 800px;
                margin: 0 auto;
                overflow: visible; /* penting */
                height: 520px;      /* minimal 420–500px */
            }



            .book-slider {
                display: flex;
                justify-content: center;
                align-items: center;
                transition: transform 0.5s ease;
                position: relative;
            }

            .book-slide {
                position: absolute;
                top: 0; /* pastikan dimulai dari atas */
                opacity: 0;
                transform: scale(0.7);
                transition: all 0.5s ease;
                text-align: center;
                pointer-events: none;
            }


            .book-slide img {
                width: 250px;
                height: 400px;
                border-radius: 10px;
                object-fit: cover;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            }

            .book-title {
                color: white;
                font-weight: bold;
                margin-top: 10px;
            }

            .book-slide.active {
                opacity: 1;
                transform: translateX(-50%) scale(1);
                left: 50%;
                z-index: 3;
                pointer-events: auto;
            }

            .book-slide.prev {
                opacity: 0.7;
                left: 35%;  /* lebih dekat ke tengah */
                transform: translateX(-50%) scale(0.85);
                z-index: 2;
                pointer-events: none;
            }

            .book-slide.next {
                opacity: 0.7;
                left: 65%;  /* lebih dekat ke tengah */
                transform: translateX(-50%) scale(0.85);
                z-index: 2;
                pointer-events: none;
            }

            .book-nav {
                position: absolute;
                top: 40%;
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                font-size: 2rem;
                padding: 0.5rem 1rem;
                cursor: pointer;
                z-index: 5;
                border-radius: 50%;
            }

            .book-nav.left {
                left: 100px;
            }

            .book-nav.right {
                right: 100px;
            }
        </style>


@section('content')
    <!-- Bootstrap CSS & JS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <div class="container-fluid" style="
    position: relative;
    background: url('{{ asset('img/background.png') }}') no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    padding: 0; /* ubah dari 2rem jadi 0 */
">

        <!-- Overlay -->
        <div style="
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: 0;
        "></div>

        <!-- Konten -->
        <div style="position: relative; z-index: 1; color: white;">
            <div class="d-flex justify-content-center">
                <div class="text-center" style="max-width: 700px;">
                    <h1 class="mb-4">Cari Buku</h1>
                    <form class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Judul Buku: Harry Potter, A Game of Thrones, and more">
                        <button class="btn btn-dark" type="submit">Cari</button>
                    </form>

                    <div class="row justify-content-center mb-5">
                        @foreach (['game of thrones.jpg', 'harry potter.jpg', 'ocean door.jpg', 'million to one.jpg', 'beloved girl.jpg'] as $img)
                            <div class="col-auto">
                                <img src="{{ asset('img/' . $img) }}" width="100" style="border-radius: 6px;" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Tentang Kami & Kategori Buku -->
            <div class="d-flex justify-content-center">
                <div class="text-center" style="max-width: 700px;">
                    <h5><strong>Tentang Kami</strong></h5>
                    <p>
                        Selamat datang di Perpustakaan Tealibrary! Kami adalah pusat pengetahuan dan literasi
                        yang berdedikasi untuk mendukung pembelajaran, penelitian, dan pengembangan diri masyarakat.
                        Dengan koleksi ribuan buku, jurnal, dan media digital, perpustakaan kami menjadi ruang terbuka
                        bagi siapa saja yang haus akan ilmu dan informasi.
                    </p>

                    <h4 class="mt-5">Kategori Buku</h4>
                    <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
                        @foreach(['Komik', 'Novel', 'Biografi', 'Buku Ilmiah', 'Buku Anak', 'Cerpen'] as $kategori)
                            <a href="#" class="btn btn-dark rounded-pill px-4 py-2">{{ $kategori }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="book-slider-container mt-5">
            <div class="book-slider">
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
                    <div class="book-slide" data-index="{{ $index }}">
                        <img src="{{ asset('img/' . $book) }}" alt="{{ pathinfo($book, PATHINFO_FILENAME) }}">
                        <p class="book-title">{{ strtoupper(pathinfo($book, PATHINFO_FILENAME)) }}</p>
                    </div>
                @endforeach
            </div>

            <!-- Tombol -->
            <button class="book-nav left" onclick="moveSlide(-1)">&#10094;</button>
            <button class="book-nav right" onclick="moveSlide(1)">&#10095;</button>
        </div>
        </div>
    </div>

<script>
    let currentIndex = 0;

    function updateSlides() {
        const slides = document.querySelectorAll('.book-slide');
        slides.forEach((slide, index) => {
            slide.classList.remove('active', 'prev', 'next');

            if (index === currentIndex) {
                slide.classList.add('active');
            } else if (index === (currentIndex - 1 + slides.length) % slides.length) {
                slide.classList.add('prev');
            } else if (index === (currentIndex + 1) % slides.length) {
                slide.classList.add('next');
            }
        });
    }

    function moveSlide(direction) {
        const slides = document.querySelectorAll('.book-slide');
        currentIndex = (currentIndex + direction + slides.length) % slides.length;
        updateSlides();
    }

    document.addEventListener('DOMContentLoaded', updateSlides);
</script>
@endsection
