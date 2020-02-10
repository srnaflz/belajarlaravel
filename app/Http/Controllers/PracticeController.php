<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass(){
        $nama = "Zulfa Nursaidah";
        return view('latihan', compact('nama'));
    }
    public function pass1(){
        $gaji = 2000000;
        return view('latihan1',['penghasilan'=>$gaji]);
    }
    public function status($status='jomblo'){
        //dd($status); ->  untuk mengecek data variable
    
        return view('latihan2',compact('status'));
    }
    public function loop(){
        $buku = [
            ['judul' => 'Bangkit dari Remedial ', 'penerbit'=>
            'Erlangga','harga'=>100000,'penulis' => 'Aku yang suka remedin kamyu'],

            ['judul' => 'Tips Move on Dari Kamyu', 'penerbit' => 'Erlangga',
            'harga' =>150000,'penulis' => 'Epul'],

            ['judul' => 'Kekuatan 1/3 Malam', 'penerbit' => 'Erlangga',
            'harga' =>250000,'penulis' => 'mutia'],
        ];
        return view('latihan3',compact('buku'));
    }

}
