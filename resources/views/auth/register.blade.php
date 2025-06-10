<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tealibrary - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5 url('/img/background2.jpg') no-repeat center center;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #216c6c;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-family: 'Playfair Display', serif;
            font-size: 36px;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
        }
        .login-box {
            background-color: #216c6c;
            padding: 40px;
            border-radius: 8px;
            display: flex;
            gap: 40px;
            box-shadow: 4px 4px 10px rgba(0,0,0,0.3);
        }
        .login-form {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            width: 300px;
        }
        .login-form input {
            background-color: #e0e8ea;
        }
        .login-btn {
            background-color: #ccc;
            font-weight: bold;
        }
        .left-box {
            text-align: center;
            color: white;
        }
        .left-box img {
            width: 250px;
        }
        .learn-more {
            background-color: #74b3b3;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            border: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">Tealibrary</div>

    <div class="login-container">
        <div class="login-box">
            <div class="left-box">
                <img src="{{ asset('img/logo.png') }}" alt="Tealibrary">
                <br><br>
                <div class="learn-more">Learn and Earn More</div>
            </div>
            <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="d-flex justify-content-end mb-2">
                    <span style="border-bottom: 2px solid #216c6c; font-weight: bold;">Sign Up</span>
                    <a href="{{ route('login') }}" class="ms-2 text-decoration-none" style="color:#216c6c">Login</a>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label small fw-bold">Nama</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label small fw-bold">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Anda" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label small fw-bold">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label small fw-bold">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn login-btn w-100">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
