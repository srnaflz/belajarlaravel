<?php

use App\Penjual;
use Illuminate\Database\Seeder;

class PenjualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jual = new Penjual;
        
        $jual->barang = 'Buku';
        $jual->jumlah_terjual = 2;
        $jual->tanggal_terjual = '20-01-2020';
        $jual->harga_jual= 80000;
        $jual->pembuat = 'zulfanur';
        $jual->save();
        //
    }
}
