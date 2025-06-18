<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class BiografiController extends Controller
{
    public function index(Request $request)
    {
        // Data bio statis
        $data = [
            ['img' => 'beloved girl.jpg', 'title' => 'Detektif Conan', 'chapter' => '1000', 'rating' => '8/10'],
            ['img' => 'game of thrones.jpg', 'title' => 'Spy X Family', 'chapter' => '70', 'rating' => '9/10'],
            ['img' => 'harry potter.jpg', 'title' => 'The Apothecary Diaries', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'million to one.jpg', 'title' => 'Kimetsu no Yaiba', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'ocean door.jpg', 'title' => 'One Piece', 'chapter' => '1000', 'rating' => '8/10'],
            ['img' => 'beloved girl.jpg', 'title' => 'Detektif Conan', 'chapter' => '1000', 'rating' => '8/10'],
            ['img' => 'game of thrones.jpg', 'title' => 'Spy X Family', 'chapter' => '70', 'rating' => '9/10'],
            ['img' => 'harry potter.jpg', 'title' => 'The Apothecary Diaries', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'million to one.jpg', 'title' => 'Kimetsu no Yaiba', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'ocean door.jpg', 'title' => 'One Piece', 'chapter' => '1000', 'rating' => '8/10'],
            ['img' => 'beloved girl.jpg', 'title' => 'Detektif Conan', 'chapter' => '1000', 'rating' => '8/10'],
            ['img' => 'game of thrones.jpg', 'title' => 'Spy X Family', 'chapter' => '70', 'rating' => '9/10'],
            ['img' => 'harry potter.jpg', 'title' => 'The Apothecary Diaries', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'million to one.jpg', 'title' => 'Kimetsu no Yaiba', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'ocean door.jpg', 'title' => 'One Piece', 'chapter' => '1000', 'rating' => '8/10'],
            ['img' => 'beloved girl.jpg', 'title' => 'Detektif Conan', 'chapter' => '1000', 'rating' => '8/10'],
            ['img' => 'game of thrones.jpg', 'title' => 'Spy X Family', 'chapter' => '70', 'rating' => '9/10'],
            ['img' => 'harry potter.jpg', 'title' => 'The Apothecary Diaries', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'million to one.jpg', 'title' => 'Kimetsu no Yaiba', 'chapter' => '100', 'rating' => '8/10'],
            ['img' => 'ocean door.jpg', 'title' => 'One Piece', 'chapter' => '1000', 'rating' => '8/10'],
        ];

        // Konfigurasi pagination (5 kolom × 2 baris = 10 per halaman)
        $perPage = 10;
        $page = $request->input('page', 1);
        $offset = ($page - 1) * $perPage;

        $paginator = new LengthAwarePaginator(
            array_slice($data, $offset, $perPage),
            count($data),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('biografi', ['biografiList' => $paginator]);
    }
}
