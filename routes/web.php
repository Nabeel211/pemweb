<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

// Halaman publik
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/peminjaman', function () {
    return view('peminjaman');
})->name('peminjaman');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/komik', function () {
    return view('komik');
})->name('komik');

Route::get('/novel', function () {
    return view('novel');
})->name('novel');

Route::get('/pelajaran', function () {
    return view('pelajaran');
})->name('pelajaran');

Route::get('/cerpen', function () {
    return view('cerpen');
})->name('cerpen');

Route::get('/biografi', function () {
    return view('biografi');
})->name('biografi');

// Auth (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Authenticated User Pages
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);