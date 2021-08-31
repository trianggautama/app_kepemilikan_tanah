<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    h4,
    h2 {
      font-family: serif;
    }

    body {
      font-family: sans-serif;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    th {
      text-align: center;
    }

    td {
      text-align: center;
    }

    br {
      margin-bottom: 5px !important;
    }

    .judul {
      text-align: center;
    }

    .header {
      margin-bottom: 0px;
      text-align: center;
      height: 110px;
      padding: 0px;
    }

    .pemko {
      width: 70px;
    }

    .logo {
      float: left;
      margin-right: 0px;
      width: 18%;
      padding: 0px;
      text-align: right;
    }

    .headtext {
      float: right;
      margin-left: 0px;
      width: 72%;
      padding-left: 0px;
      padding-right: 10%;
    }

    hr {
      margin-top: 10%;
      height: 3px;
      background-color: black;
      width: 100%;
    }

    .ttd {
      margin-left: 65%;
      text-align: center;
      text-transform: uppercase;
    }

    .text-right {
      text-align: right;
    }

    .isi {
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="header">
    <div class="logo">
      <img class="pemko" src="ATR.png">
    </div>
    <div class="headtext">
      <h3 style="margin:0px;">KEMENTRIAN AGRARIA DAN TATA RUANG </h3>
      <h3 style="margin:0px;">BADAN PERTANAHAN NASIONAL BANJARBARU </h3>
      <p style="margin:0px;">Loktabat Utara, Banjarbaru Utara, Banjarbaru City, South Kalimantan 70714</p>
    </div>
    <br>
  </div>
  <div class="container">
    <hr style="margin-top:1px;">
    <div class="isi">
      <h2 style="text-align:center;">DATA PEGAWAI</h2>
      <br>
      <table class="table table-bordered" id="basic-data-table">
        <thead>
          <tr>
            <td>No</td>
            <td>NIP</td>
            <td>Nama</td>
            <td>Pangkat/Golongan</td>
            <td>Jabatan</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>Alamat</td>
            <td>Nomor Telepon</td>
            <td>Role</td>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $d)

          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$d->nip}}</td>
            <td>{{$d->nama}}</td>
            <td>{{$d->pangkat->nama_pangkat}}</td>
            <td>{{$d->jabatan->nama_jabatan}}</td>
            <td>{{$d->tempat_lahir.', '.carbon\carbon::parse($d->tanggal_lahir)->translatedFormat('d F Y')}}
            <td>{{$d->alamat}}</td>
            <td>{{$d->no_telepon}}</td>
            </td>
            <td>
              @if ($d->role == 0)
              Pemohon
              @elseif($d->role == 1)
              Admin
              @elseif($d->role == 2)
              Tim peneliti
              @elseif($d->role == 3)
              Ketua peneliti
              @elseif($d->role == 4)
              Kepala Seksi
              @elseif($d->role == 5)
              Kepala Badan
              @elseif($d->role == 6)
              Admin Arsip
              @else
              -
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <br>
      <br>
      <div class="ttd">
        <p style="margin:0px"> Banjarbaru,</p>
        <h6 style="margin:0px">Mengetahui</h6>
        <h5 style="margin:0px">Kepala Badan </h5>
        <br>
        <br>
        <h5 style="text-decoration:underline; margin:0px">(...........................)</h5>
        <!-- <h5 style="margin:0px">NIP. 19620606 199203 2 007</h5> -->
      </div>
    </div>
  </div>
</body>

</html>