<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    //

    public function index(){
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }
    public function show($id){
        $buku = Buku::find($id);
        return view('buku.show',compact('buku'));
    }  
    
    public function hitungbuku(){
        $buku = Buku::count();
        return $buku;
    } 

    public function databaru($jdl){
        $buku = new Buku;
        $buku->judul = $jdl;
        $buku->jumlah_halaman = 400;
        $buku->penerbit = 'granmedia';
        $buku->synopsis = "belajar hijaiyah";
        $buku->status = 1;
        $buku->save();

        return $buku;

    }
    public function update($id,$judul){
        $buku = Buku::find($id);
        $buku->judul = $judul;
        $buku->jumlah_halaman = 4002;
        $buku->penerbit = 'Lorem Ipsum';
        $buku->synopsis = "cv lorem ipsum";
        $buku->status = false;
        $buku->save();

        return $buku;
    }
    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete();
        return $buku;
    }
}
