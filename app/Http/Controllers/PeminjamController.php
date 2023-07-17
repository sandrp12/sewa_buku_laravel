<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Peminjaman extends Controller
{
    public function lihat_data_peminjam(){
        $peminjam = ['Tiar',
                    'Tabula',
                    'Ayu',
                    'Idrus'];
        return view('peminjams/lihat_data_peminjam', compact('peminjam'));
    }
}
