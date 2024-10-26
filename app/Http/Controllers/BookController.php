<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        // get data
        $data ['books'] = [
            [
                'judul' => 'pengembangan mental dengan JSHT',
                'halaman' => 120,
                'penulis' => 'adam arrahman'
            ],
            [
                'judul' => 'Gajah Terbang',
                'halaman' => 500,
                'penulis' => 'GAT'
            ],
        ];
        return view("books.index", $data);
    }
    public function search(string $id){
        $data['id'] = $id;
        return view("books.index", $data);
    }
}
