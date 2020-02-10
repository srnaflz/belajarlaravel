<?php

use App\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new Buku;
        $buku->judul = 'Belajar Php2';
        $buku->jumlah_halaman =100;
        $buku->penerbit= 'Gramedia Pustaka';
        $buku->synopsis= "ini adalah ......";
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar Matematika2';
        $buku->jumlah_halaman =1001;
        $buku->penerbit= 'Gramedia Pustaka';
        $buku->synopsis= "Bangun Datar ......";
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar ipa2';
        $buku->jumlah_halaman =100;
        $buku->penerbit= 'Gramedia Pustaka';
        $buku->synopsis= "Organ tubuh ......";
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar Agama2';
        $buku->jumlah_halaman =1002;
        $buku->penerbit= 'Gramedia Pustaka';
        $buku->synopsis= "Ski ......";
        $buku->status = 1;
        $buku->save();

        $buku = new Buku;
        $buku->judul = 'Belajar Senbud';
        $buku->jumlah_halaman =100;
        $buku->penerbit= 'Gramedia Pustaka';
        $buku->synopsis= "tradisonal ......";
        $buku->status = 1;
        $buku->save();
    
    }}
