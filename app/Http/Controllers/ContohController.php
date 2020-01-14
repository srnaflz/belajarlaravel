<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function latihan(){
        return 'Ini Contoh Controller';
    }
    //

    public function latihan2(){
        $a = 'Zulfa';
        $b = 'Nursaidah';

        return 'Nama Saya Adalah ' . $a.' '.$b;   
     }

     //Passing data from Controller To View

     public function latihan3(){
      $a = 'Dadang mambo';
      
      return view('test', compact('a'));
     }

     public function latihan4(){
         $a = 'ZulfaNur';

         return view('test2',['nama' => $a]);
     }

     public function biodata(){
         $a = 'Zulfa Nursaidah';
         $b = 'Islama';
         $c = 'Perempuan';
         $d = 'Leuwi panjang';
         $e = 'Smk Assalaam';
         $f = 'XI-Rpl3';
         $g = 'Rekayasa Perangkat Lunak';
         $h = 'Membaca Novel Fantasi';
         $i = '16';

         return view('biodata', ['nama' => $a,  'agama' => $b, 'jk' =>$c,
         'alamat' => $d, 'sklh' => $e, 'kelas' => $f, 'jrn' => $g, 'hobi'=> $h,
         'umur' => $i]);
     }

     //optional parameter
    /* public function baju($merk ="cresida"){
         return view('pakaian', compact('merk'));
     }*/

     //optional basic
     public function menu($a = null, $b=null, $c = null){
      
         if(isset ($a)){
            $a = "Anda Memesan $a";
          
         }
          
         if(isset ($b)){
            $b = "& $b";
          
         }

         if(isset ($c)){
         if( ($c) >= 25000){
            $c = "Anda Mendapatkan Ukuran Jombo ";
        }
       else if( ($c) <= 25000 && ($c) >= 15000){
           $c = "Anda Mendapatkan Ukuran Medium ";
       }
        else if( ($c) <= 15000 && ($c) >= 1 ){
           $c = "Anda Mendapatkan Ukuran Small ";
       }else{
           $c = "Harga tidak Valid";
       }

    }
         if(!isset($a)){
            $a = "Anda Belum Membeli Apapun ";
         }

  
         return view('jilbab', compact('a','b','c'));
     
     }
    }