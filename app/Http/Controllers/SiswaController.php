<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return $siswa;
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($ns,$name)
    {
        $siswa = new Siswa;
        $siswa->nis = $ns;
        $siswa->nama = $name;
        $siswa->kelas= 'XI-Tkr4';
        $siswa->jurusan= "Teknik Kendaraan Ringan";
        $siswa->alamat= "Cibogo";
        $siswa->tgl_lahir= '2005-11-17';
        $siswa->save();
        return $siswa;
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return $siswa;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,$nis,$nama)
    {
        $siswa = Siswa::find($id);
        $siswa->nis = $nis;
        $siswa->nama = $nama;
        $siswa->kelas= 'XI-Tsm5';
        $siswa->jurusan= "Teknik Sepeda Motor";
        $siswa->alamat= "Rancamanyar";
        $siswa->tgl_lahir= '2002-12-28';
        $siswa->save();

        return $siswa;
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return $siswa;

        //
    }
}
