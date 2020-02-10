<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Show Gaji</legend>
    
    Nip : <b>{{$gaji->nip}}</b><br>
    Nama : <b>{{$gaji->nama}}</b><br>
    Agama : <b>{{$gaji->agama}}</b><br>
    Jenis Kelamin : <b>{{$gaji->jenis_kelamin}}</b><br>
    Alamat : <b>{{$gaji->alamat}}</b><br>
    Jabatan : <b>{{$gaji->jabatan}}</b><br>
    Jam Kerja : <b>{{$gaji->jam_kerja}}</b><br>

    @if($gaji->jabatan == "Manager")
    @php $gajih = 5000000; @endphp

    @elseif( $gaji->jabatan == "Sekretaris")
    @php $gajih = 3500000; @endphp

    @elseif($gaji->jabatan == "Staff")
    @php $gajih = 2500000; @endphp

    @endif
    
  

  @if($gaji->jam_kerja >= 150)
  @php $hasil = $gajih*5/100 @endphp

  @elseif($gaji->jam_kerja > 200)
  @php $hasil = $gajih*7.5/100 @endphp

  @elseif($gaji->jam_kerja >= 250)
  @php $hasil = $gajih*10/100 @endphp
   
   @else
   @php $hasil = 0 @endphp

  @endif
  Gaji jabatan : <b>{{$gajih}}</b><br>

  tambahan : <b>{{$hasil}}</b><br>

  @php
   $total = $gajih + $hasil 

   @endphp

   Total Gaji : <b>{{$total}}</b>
    </fieldset>
</body>
</html>