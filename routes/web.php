<?php

/*
|-------------------------------------------------------------------------- 
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//root   
use App\Buku;
use App\Penjual;
use App\Pembeli;
Route::get('/', function () {
    return  Buku::all();
});

Route::get('contoh', 'ContohController@latihan');

Route::get('profil', 'ContohController@latihan2');

Route::get('profil2', 'ContohController@latihan3');

Route::get('profil3', 'ContohController@latihan4');

Route::get('datadiri', 'ContohController@biodata');

//optional
//Route::get('pakaian2/{baju?}', 'ContohController@baju');
//basic
Route::get('belanja/{makan?}/{minum?}/{ukuran?}', 'ContohController@menu');
Route::get('get-buku', 'BukuController@index');
Route::get('get-buku/{id}', 'BukuController@show');
Route::get('create-buku', 'BukuController@databaru');
Route::get('delete-buku/{id}', 'BukuController@delete');
Route::get('update-buku/{id}', 'BukuController@update');
Route::get('hitung-buku', 'BukuController@hitungbuku');



/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/saya', function (){
    return "Zulfa Nursaidah";
});
Route::get('/hobi', function (){
    return "Hobiku Membaca Novel";
});
Route::get('/sekolah', function (){
    return "Smk Assalaam Bandung";
});
Route::get('/alamat', function (){
    return "Leuwi Panjang";
});
Route::get('/ttl', function (){
    return "Bandung,26 april 2004";
});
Route::get('/variable', function (){
    $data1 = 'variable data 1';
    $data2 = 'variable data 2';
    $data3 = 'variable data 3';
    $data4 = 'variable data 4';
    $data5 = 'variable data 5';
    return $data1."<br>".$data2."<br>".$data3."<br>".$data4."<br>".$data5;
});
Route::get('/angkot/{jurusan}/{harga}', function (){
    $jurusan = "cibaduyut - karang setra";
    $data    = "angkot jurusan : ";
    $harga   = "5000";
    $data2   = "harganya :";
    return $data .' '.$jurusan."<br>". $data2 .' '.$harga;
});
Route::get('user/{nama}/{hobi}/{cita}', function ($nama,$hobi,$cita){
    return 'nama saya '. $nama. ' hobi saya '.$hobi. ' cita-cita saya '. $cita; 
});
//optional parameter
Route::get('user/{nama}/{nilai?}', function ($nama,$nilai= " kosong"){
    
    if($nilai <= 100 && $nilai >=50){
      echo "Grade A <br>";
    }
    else if($nilai <=50 && $nilai >=40 ){
        echo "Grade B <br>";
    }
    else if($nilai <=40 && $nilai >=30 ){
        echo "Grade C <br>";
    }
    else if($nilai <=30 && $nilai >=1 ){
        echo "Grade D <br>";
    }
    return 'nama  '. $nama."<br>". ' Nilai '.$nilai; 
});






/*Route::get('/about', function () {
    $nama = "Linyi";
    return view('about', ['nama' => $nama]);
});*/

/*Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/{Flight)', 'MahasiswaController@show');*/


