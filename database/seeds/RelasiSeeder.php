<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Wali;
use App\Mahasiswa;
use App\Hobi;


class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        #data dosen
        $dosen = Dosen::create(array(
            'nama' => 'Abdul Mustofa',
            'nipd' => '1234567890'
        ));
        $this->command->info('Data dosen telah diisi');
        #data mahasiswa
        $novay = Mahasiswa::create(array(
            'nama'=> 'Noviyanto rachmadi',
            'nim'=> '1015015072',
            'id_dosen' => $dosen->id
        ));
        #data mahasiswa 2 namanya djaffar nimnya 1015015088
        $dije = Mahasiswa::create(array(
            'nama'=> 'Djaffar',
            'nim'=> '1015015088',
            'id_dosen' => $dosen->id

        ));
        $ayu = Mahasiswa::create(array(
            'nama'=> 'Puji Rahayu',
            'nim'=> '1015015078',
            'id_dosen' => $dosen->id

        ));
        $this->command->info('Data Mahasiswa telah diisi');

    #membuat wali si $novay
        Wali::create(array(
            'nama' => "Ahmad S",
            'id_mahasiswa' => $novay->id
        ));
            #membuat wali si $dije
        Wali::create(array(
            'nama' => "Entahlah",
            'id_mahasiswa' => $dije->id
        ));
            #membuat wali si $ayu
        Wali::create(array(
            'nama' => "Arianto",
            'id_mahasiswa' => $ayu->id
        ));

        $this->command->info('data mahasiswa dan wali telah diisi');
      
    #Membuat data tabel hobi
    $mandi_hujan = Hobi::create(array(
        'hobi' => 'Mandi Hujan'
    ));
    $baca_buku = Hobi::create(array(
        'hobi' => 'Baca Buku'
    ));

    $novay->hobi()->attach($mandi_hujan->id);
    $novay->hobi()->attach($baca_buku->id);
    $dije->hobi()->attach($mandi_hujan->id);
    $ayu->hobi()->attach($baca_buku->id);
    $this->command->info('data mahasiswa dan hobi telah diisi');







    
    }
}
