<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    h4,h2{
        font-family:serif;
    }
        body{
            font-family:sans-serif;
        }
        table{
        border-collapse: collapse;
        width:100%;
      }
      table, th, td{
        /* border: 1px solid black; */
      }
      .border{
        border: 1px solid black;
      }
      th{
        text-align: center;
      }
      td{
        text-align: left;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         margin-bottom: 0px;
         text-align: center;
         height: 110px;
         padding: 0px;
     }
     .pemko{
         width:70px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 18%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         float:right;
         margin-left: 0px;
         width: 72%;
         padding-left:0px;
         padding-right:10%;
     }
     hr{
         margin-top: 10%;
         height: 3px;
         background-color: black;
         width:100%;
     }
     .ttd{
         margin-left:65%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-right{
         text-align:right;
     }

     .text-center{
         text-align:center;
     }
     .isi{
         padding:10px;
     }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="ATR.png">
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
            <h2 style="text-align:center;">DATA PEMOHON</h2>
            <br>
                <table class="table table-striped">
                    <tr>
                        <td width="25%">NIK</td>
                        <td width="2%">:</td>
                        <td>{{$data->nip}}</td>
                    </tr>
                    <tr>
                        <td width="25%">Nama</td>
                        <td width="2%">:</td>
                        <td>{{$data->nama}}</td>
                    </tr>
                    <tr>
                        <td width="25%">Tempat , tanggal lahir</td>
                        <td width="2%">:</td>
                        <td>{{$data->tempat_lahir}}, {{$data->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td width="25%">Alamat</td>
                        <td width="2%">:</td>
                        <td>{{$data->alamat}}</td>
                    </tr>
                    <tr>
                        <td width="25%">Username</td>
                        <td width="2%">:</td>
                        <td>{{$data->username}}</td>
                    </tr>
                </table>
                <br>
                <h4 style="text-align:center;">RIWAYAT PERMOHONAN</h4>
                <br>
                    <table id="basic-data-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="border text-center">No</td>
                                <td class="border text-center">Jenis Bangunan</td>
                                <td class="border text-center">No Fisik</td>
                                <td class="border text-center">No Yuridis</td>
                                <td class="border text-center">Letak Tanah</td>
                                <td class="border text-center">Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->permohonan as $d)
                            <tr>
                                <td class="border text-center">{{$loop->iteration}}</td>
                                <td class="border text-center">{{$d->jenis_bangunan->nama_jenis}}</td>
                                <td class="border text-center">{{$d->no_fisik}}</td>
                                <td class="border text-center">{{$d->no_yuridis}}</td>
                                <td class="border text-center">{{$d->letak_tanah}}</td>
                                <td class="border text-center">
                                    @switch($d->status)
                                    @case(0)
                                    <div class="badge badge-warning">Verifikasi Admin</div>
                                    @break
                                    @case(1)
                                    <div class="badge badge-warning">Pelaksanaan Pengukuran dan Pemetaan
                                        Kadastral</div>
                                    @break
                                    @case(2)
                                    <div class="badge badge-warning">Verifikasi Kepala Survey, Seksi dan
                                        Pemetaan</div>
                                    @break
                                    @case(3)
                                    <div class="badge badge-warning">Verifikasi Sub Seksi Pemetaan Hak Tanah dan
                                        Pemberdayaan Masyarakat</div>

                                    @break
                                    @case(4)
                                    <div class="badge badge-warning">Verifikasi Kepala Kantor Pertanahan</div>
                                    @break
                                    @default
                                    <div class="badge badge-primary">Selesai Pengarsipan</div>

                                    @endswitch
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