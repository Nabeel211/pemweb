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

Route::get('/komik', function () {
    return view('komik');
})->name('komik');

Route::get('/novel', function () {
    return view('novel');
})->name('novel');

Route::get('/bukupelajaran', function () {
    return view('bukupelajaran');
})->name('bukupelajaran');

Route::get('/bukuanak', function () {
    return view('bukuanak');
})->name('bukuanak');

Route::get('/biografi', function () {
    return view('biografi');
})->name('biografi');