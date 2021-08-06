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
        /* text-align: center; */
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
            <h2 style="text-align:center;">LAPORAN SUVEY LAPANGAN (GAMBAR UKUR)</h2>
                <!-- <p>Berita Acara ini dibuat pada {{Carbon\carbon::now()->translatedFormat('d F Y')}}</p> -->
                <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bahwa  pada hari ini {{Carbon\carbon::now()->translatedFormat('d F Y')}} dalam rangka permohonan penerbitan sertifikat tanah maka telah dilakukan survei lapangan guna Pelaksanaan Pengukuran dan Pemetaan oleh {{$data->nama_petugas}} sebagai petugas teknis lapangan maka permohonan dengan data berikut :</p>
                    <table class="table table-striped">
                            <tr>
                                <td width="20%">Jenis Bangunan</td>
                                <td width="2%">:</td>
                                <td>{{$data->permohonan->jenis_bangunan->nama_jenis}}</td>
                            </tr>
                            <tr>
                                <td>No fisik</td>
                                <td>:</td>
                                <td>{{$data->permohonan->no_fisik}}</td>
                            </tr>
                            <tr>
                                <td>No Yuridis</td>
                                <td>:</td>
                                <td>{{$data->permohonan->no_yuridis}}</td>
                            </tr>
                            <tr>
                                <td>NIB</td>
                                <td>:</td>
                                <td>{{$data->permohonan->nib}}</td>
                            </tr>
                            <tr>
                                <td>Letak Tanah</td>
                                <td>:</td>
                                <td>{{$data->permohonan->letak_tanah}} , Kelurahan {{$data->permohonan->kelurahan->nama_kelurahan}}, Kecamatan {{$data->permohonan->kelurahan->kecamatan->nama_kecamatan}}</td>
                            </tr>
                            <tr>
                                <td>Dikuasai Awal</td>
                                <td>:</td>
                                <td>{{$data->permohonan->dikuasai_awal}}</td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td>:</td>
                                <td>{{$data->permohonan->tahun}}</td>
                            </tr>
                            <tr>
                                <td>Dikuasai Pemohon</td>
                                <td>:</td>
                                <td>{{$data->permohonan->dikuasai_awal}}</td>
                            </tr>
                            <tr>
                                <td>Dengan Dasar</td>
                                <td>:</td>
                                <td>{{$data->permohonan->dengan_dasar}}</td>
                            </tr>
                            <tr>
                                <td>Dasar</td>
                                <td>:</td>
                                <td>{{$data->permohonan->dengan_dasar}}</td>
                            </tr>
                            <tr>
                                <td>No Register</td>
                                <td>:</td>
                                <td>{{$data->permohonan->no_register}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>{{carbon\carbon::parse($data->permohonan->tanggal_register)->translatedFormat('d F Y')}}
                                </td>
                            </tr>
                        </table>
                        <p>Adapun hasil survei lapangan pemetaan dan pengukuran adalah sebagai beriku :</p>
                            <table class="table table-striped">
                                    <tr>
                                        <td width="20%">Tanggal Survei</td>
                                        <td width="2%">:</td>
                                        <td>{{carbon\carbon::parse($data->tanggal_survei)->translatedFormat('d F Y')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Petugas Survei</td>
                                        <td>:</td>
                                        <td>{{$data->nama_petugas}}</td>
                                    </tr>
                                    <tr>
                                        <td>Luas Bidang (m <sup>2</sup> )</td>
                                        <td>:</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Gambar Denah</td>
                                        <td>:</td>
                                        <td>( Telampir )</td>
                                    </tr>
                                </table>
                                <h4 style="text-align:center;">KONDISI TANAH</h4>
                                <table>
                                    <thead>
                                        <tr>
                                            <th  class="border text-center">Kepekaan Erosi</th>
                                            <th  class="border text-center">Tingkat Erosi</th>
                                            <th  class="border text-center">Drainase</th>
                                            <th  class="border text-center">Kerikil / Bebatuan</th>
                                            <th  class="border text-center">Ancaman Banjir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td  class="border text-center">-</td>
                                            <td  class="border text-center">-</td>
                                            <td  class="border text-center">-</td>
                                            <td  class="border text-center">-</td>
                                            <td  class="border text-center">-</td>
                                        </tr>
                                    </tbody>
                                </table>
                <br>
                <br>
                <table>
                    <tr>
                        <td class="text-center" width="50%">
                            <p>Tim Peneliti</p>
                            <br>
                            <br>
                            <br>
                            {{$data->nama_petugas}}
                        </td>
                        <td class="text-center">
                            <p style="margin:0px"> Banjarbaru,</p>
                            <h6 style="margin:0px">Mengetahui</h6>
                            <h5 style="margin:0px">Kepala Tim Peneliti </h5>
                            <br>
                            <br>
                            <h5 style="text-decoration:underline; margin:0px">{{$ketua->nama}}</h5>
                            <h5 style="margin:0px">NIP. {{$ketua->nip}}</h5>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>