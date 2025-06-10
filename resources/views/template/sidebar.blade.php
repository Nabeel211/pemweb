<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tealibrary</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font: Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }
        .sidebar .user-name {
            padding: 10px 20px;
            display: block;
        }
        .sidebar {
            height: 100vh;
            background-color: #216c6c;
            color: white;
            position: fixed;
            width: 250px;
            padding-top: 20px;
        }
        .sidebar a, .sidebar form button {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            border: none;
            background: none;
            text-align: left;
        }
        .sidebar a:hover, .sidebar form button:hover {
            background-color: #1a5555;
        }
        .sidebar .dropdown-subitem {
            font-size: 14px;
            padding: 6px 30px;
        }
        .main-content {
            margin-left: 250px;
        }
        .logo-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <!-- Logo -->
    <div class="text-center mb-4">
        <img src="{{ asset('img/logo.png') }}" alt="Tealibrary Logo" style="width: 200px; height: auto;">
    </div>
    
    <a href="{{ route('home') }}"><i class="bi bi-house-door me-2"></i> Dashboard</a>

    <a data-bs-toggle="collapse" href="#listBukuCollapse" role="button" aria-expanded="false" aria-controls="listBukuCollapse">
        <i class="bi bi-book me-2"></i> List Buku <i class="bi bi-caret-down-fill float-end"></i>
    </a>
    <div class="collapse" id="listBukuCollapse">
        <a href="{{ route('komik') }}" class="dropdown-subitem d-block"><i class="bi bi-bookmark me-2"></i> Komik</a>
        <a href="{{ route('novel') }}" class="dropdown-subitem d-block"><i class="bi bi-journal-bookmark me-2"></i> Novel</a>
        <a href="{{ route('biografi') }}" class="dropdown-subitem d-block"><i class="bi bi-person-lines-fill me-2"></i> Biografi</a>
        <a href="{{ route('pelajaran') }}" class="dropdown-subitem d-block"><i class="bi bi-journals me-2"></i> Buku Pelajaran</a>
        <a href="{{ route('cerpen') }}" class="dropdown-subitem d-block"><i class="bi bi-emoji-smile me-2"></i> Cerpen</a>
    </div>


    <a href="{{ route('history') }}">
        <i class="bi bi-arrow-counterclockwise me-2"></i> History
    </a>
    <a href="{{ route('peminjaman') }}">
        <i class="bi bi-box-arrow-in-down me-2"></i> Peminjaman
    </a>

    {{-- Dynamic auth section --}}
    @guest
        <a href="{{ route('login') }}">
            <i class="bi bi-box-arrow-in-right me-2"></i> Login
        </a>
    @endguest

    @auth
        <div class="user-name">
            <i class="bi bi-person-circle me-2"></i> {{ Auth::user()->name }}
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </button>
        </form>
    @endauth
</div>

<div class="main-content">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
