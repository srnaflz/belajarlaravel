<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('index');
    }
    public function about(){
        $nama = "Linyi";
        return view('about', ['nama' => $nama]); 
    }
}
