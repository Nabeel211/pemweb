<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tealibrary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
        }
        .sidebar {
            height: 100vh;
            background-color: #216c6c;
            color: white;
            position: fixed;
            width: 250px;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #1a5555;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <h3 class="text-center mb-4">Tealibrary</h3>

    <a href="{{route('home')}}"><i class="bi bi-house-door me-2"></i> Dashboard</a>

    <a data-bs-toggle="collapse" href="#listBukuCollapse" role="button" aria-expanded="false" aria-controls="listBukuCollapse">
        <i class="bi bi-book me-2"></i> List Buku <i class="bi bi-caret-down-fill float-end"></i>
    </a>
    <div class="collapse" id="listBukuCollapse">
        <a href="#" class="ps-4 d-block"><i class="bi bi-bookmark me-2"></i> Komik</a>
        <a href="#" class="ps-4 d-block"><i class="bi bi-journal-bookmark me-2"></i> Novel</a>
        <a href="#" class="ps-4 d-block"><i class="bi bi-person-lines-fill me-2"></i> Biografi</a>
        <a href="#" class="ps-4 d-block"><i class="bi bi-journals me-2"></i> Buku Pelajaran</a>
        <a href="#" class="ps-4 d-block"><i class="bi bi-emoji-smile me-2"></i> Buku Anak</a>
    </div>

    <a href="{{ route('history') }}">
        <i class="bi bi-arrow-counterclockwise me-2"></i> History
    </a>
    <a href="{{ route('peminjaman') }}">
        <i class="bi bi-box-arrow-in-down me-2"></i> Peminjaman
    </a>
</div>



    <div class="main-content">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
