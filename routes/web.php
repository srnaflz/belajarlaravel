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
use App\Gaji;
//6-2-2020
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;
use App\Wali;


#Mencari Mahasiswa dengan Nim
Route::get('relasi-1',function(){
    #Temukan nahasiswa dengan Nim 1015015072
    $mahasiswa = Mahasiswa::where('nim','=','1015015072')->first();

    #TAmpilkan nama  wali mahasiswa
    return $mahasiswa->wali->nama;
});
Route::get('relasi-2',function (){
    #mencari data mahasiswa dengn nim  1015015072
    $mahasiswa = Mahasiswa::where('nim','=','1015015072')->first();
    
    #TAmpilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;

});
Route::get('relasi-3',function(){
    #menacari data dosen yang bernama yulianto
    $dosen = Dosen::where('nama', '=',  'Abdul Mustofa')->first();
    #tampilkan seluruh data mahasiswa didiknya
    foreach($dosen->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama.
    '<strong>' . $temp->nim . '</strong></li>';
});
Route::get('relasi-4', function(){
    #mencari data mahasiswa yang bernama noviyanto rachmadi
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();
    #menampilkan seluruh hobi si novay
    foreach($novay->hobi as $temp)
    echo '<li>' . $temp->hobi . '</li>';
});
Route::get('relasi-5', function(){
    #mencari data hobi yang bernama Mandi Hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();
    #Menampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach($mandi_hujan->mahasiswa as $temp)
    echo '<li> Nama : ' . $temp->nama .
    '<strong>' . $temp->nim  . '</strong></li>';
});
Route::get('eloquent', function (){
    $data = Mahasiswa::with('wali','dosen','hobi')->get();
    return view('eloquent',compact('data'));
});


Route::get('/buku', function () {
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
//CRUD BUKU
Route::get('get-buku', 'BukuController@index');
Route::get('get-buku/{id}', 'BukuController@show');
Route::get('create-buku/{judul}', 'BukuController@databaru');
Route::get('delete-buku/{id}', 'BukuController@delete');
Route::get('update-buku/{id}/{judul}', 'BukuController@update');
Route::get('hitung-buku', 'BukuController@hitungbuku');

//CRUD SISWA
Route::get('get-siswa', 'SiswaController@index');
Route::get('get-siswa/{id}', 'SiswaController@show');
Route::get('create-siswa/{nis}/{nama}', 'SiswaController@create');
Route::get('delete-siswa/{id}', 'SiswaController@destroy');
Route::get('update-siswa/{id}/{nis}/{nama}', 'SiswaController@update');

//Passing data 4-februari-2020
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('status/{a?}','PracticeController@status');
Route::get('buku','PracticeController@loop');

//book
Route::get('book','BukuController@index');
Route::get('book/{id}','BukuController@show');

//gaji 5-februari-2020
Route::get('penggajihan','GajiController@index');
Route::get('penggajihan/{id}','GajiController@show');

//Belajar Blade Templating 6-februari-2020
Route::get('/profil',function(){
    return view('profil');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/blog',function(){
    return view('blog');
});


Route::get('/', function () {
    return view('welcome');
});
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


