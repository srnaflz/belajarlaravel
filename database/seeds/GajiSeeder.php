<?php

use App\Gaji;
use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $gaji = new Gaji;
        $gaji->nip = '1621163738';
        $gaji->nama = 'Zulfa';
        $gaji->agama = 'Islam ';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = "Leuwi Panjang";
        $gaji->jabatan = 'Manager';
        $gaji->jam_kerja = 160;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '1621189938';
        $gaji->nama = 'Linyi';
        $gaji->agama = 'Islam ';
        $gaji->jenis_kelamin = 'Laki-Laki';
        $gaji->alamat = "London";
        $gaji->jabatan = 'Sekretaris';
        $gaji->jam_kerja = 200;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '1234163738';
        $gaji->nama = 'Azmi';
        $gaji->agama = 'Islam ';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = "Rancamanyar";
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = 270;
        $gaji->save();

        $gaji = new Gaji;
        $gaji->nip = '1234164638';
        $gaji->nama = 'Rofi';
        $gaji->agama = 'Islam ';
        $gaji->jenis_kelamin = 'Perempuan';
        $gaji->alamat = "Rancamanyar";
        $gaji->jabatan = 'Staff';
        $gaji->jam_kerja = 2;
        $gaji->save();
    }
}
