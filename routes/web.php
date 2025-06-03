<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/peminjaman', function () {
    return view('peminjaman');
})->name('peminjaman');

Route::get('/history', function () {
    return view('history');
})->name('history');
