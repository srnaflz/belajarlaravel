<?php

use App\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beli = new Pembeli;
        
        $beli->nama_pembeli = 'Zulfa';
        $beli->judul = 'Harry Potter';
        $beli->harga_buku = 80000;
        $beli->jumlah_buku = 1;
        $beli->total_harga = 80000;
        $beli->save();
        //
    }
}
