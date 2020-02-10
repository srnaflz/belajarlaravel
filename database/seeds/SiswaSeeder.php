<?php

use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = new Siswa;
        $siswa->nis = '1245265265332';
        $siswa->nama = 'Zulfa';
        $siswa->kelas= 'XI-Rpl3';
        $siswa->jurusan= "Rekayasa Perangkat Lunak";
        $siswa->alamat= "Leuwi Panjang";
        $siswa->tgl_lahir= '2004-04-26';
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nis = '1245265262332';
        $siswa->nama = 'Linyi';
        $siswa->kelas= 'XI-Rpl4';
        $siswa->jurusan= "Rekayasa Perangkat Lunak";
        $siswa->alamat= "Beijing";
        $siswa->tgl_lahir= '2000-01-11';
        $siswa->save();

        $siswa = new Siswa;
        $siswa->nis = '2535265265332';
        $siswa->nama = 'Firi';
        $siswa->kelas= 'XI-Rpl3';
        $siswa->jurusan= "Rekayasa Perangkat Lunak";
        $siswa->alamat= "cibay";
        $siswa->tgl_lahir= '2003-02-18';
        $siswa->save();
        //

    }
}
