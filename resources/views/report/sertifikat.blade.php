<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    p{
        font-size: 12px;
        margin: 0px;
    }
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
      th{
        text-align: center;
      }
      td{
        text-align: center;
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
         width:45px;
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
     .isi{
         padding:10px;
     }
     @page { 
         size: 18 cm 16 cm ; 
         }
    </style>
</head>
<body>
    <div class="header">
            <!-- <div class="logo">
                    
            </div>
            <div class="headtext">
                <h3 style="margin:0px;">KEMENTRIAN AGRARIA DAN TATA RUANG </h3>
                <h3 style="margin:0px;">BADAN PERTANAHAN NASIONAL BANJARBARU </h3>
                <p style="margin:0px;">Loktabat Utara, Banjarbaru Utara, Banjarbaru City, South Kalimantan 70714</p>
            </div>
            <br> -->
        <table>
            <tr>
                <td width="7%" style="text-align:left;"><img  class="pemko" src="ATR.png"></td>
                <td width="25%"><p style="font-size: 8px; text-align:left;">KEMENTRIAN AGRARIA DAN TATA RUANG <br>BADAN PERTANAHAN NASIONAL <br>REPUBLIK INDDONESIA</p></td>
                <td><img  width="70px" src="garuda.png"></td>
                <td style="text-align: right;"><p style="font-size: 8px;">{{Carbon\carbon::now()->translatedFormat('d F Y')}}</p></td>
                <td width="7%"><img class="pemko" src="barcode.png" alt=""></td>
            </tr>
        </table>
    </div>
    <div class="container">
        <div class="isi">
            <h4 style="text-align:center; margin:0px;">SERTIFIKAT KEPEMILIKAN TANAH</h4>
            <p style="text-align:center; margin:0px;">NIB. {{$data->nib}}</p>
            <br>
                <div class="isi">
                    <p style="font-size: 12px;">Hak Tanah ini terletak di {{$data->alamat}}, Kelurahan {{$data->kelurahan->nama_kelurahan}} Kecamatan {{$data->kelurahan->kecamatan->nama_kecamatan}} Kota Banjarbaru Kalimantan Selatan. Merupakan bagian sebidang tanah bersama :</p>
                    <table style="margin: 10px;">
                        <tr>
                            <td style="text-align: left;" width="18%"><p>Hak</p></td>
                            <td width="2%"><p>:</p></td>
                            <td style="text-align: left;"><p>{{$data->user->nama}}</p></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;" width="18%"><p>NIB</p></td>
                            <td width="2%"><p>:</p></td>
                            <td style="text-align: left;"><p>{{$data->nib}}</p></td>
                        </tr>
                        <tr>
                            <td style="text-align: left;" width="18%"><p>Tanggal Ukur</p></td>
                            <td width="2%"><p>:</p></td>
                            <td style="text-align: left;"><p>{{Carbon\carbon::parse($data->survei->tanggal_survei)->translatedFormat('d F Y')}}</p></td>
                        </tr>
                    </table>
                    <p>Batas batas dari satuan tanah ini telah di tetapkan dalam pertelaan yang telah disahkan oleh Badan Pertanahan Nasional Kota Banjarbaru</p>
                </div>
                <br>
                <br>
                <div class="ttd">
                <p style="margin:0px"> Banjarbaru, {{Carbon\carbon::now()->translatedFormat('d F Y')}}</p>
                <p style="margin:0px">Mengetahui</p>
                <p style="margin:0px">Kepala Badan </p>
                <br>
                <br>
                <p style="text-decoration:underline; margin:0px">{{$kadis->nama}}</p>
                <p style="margin:0px">NIP. {{$kadis->nip}}</p>
                </div>
            </div>
        </div>
    </body>
</html>