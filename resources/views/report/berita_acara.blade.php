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
            <h2 style="text-align:center;">BERITA ACARA SERAH TERIMA</h2>
                <div class="isi" style="padding-left: 30px; padding-right: 30px;">
                    <p>Berita Acara ini dibuat pada {{Carbon\carbon::now()->translatedFormat('d F Y')}}</p>
                    <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; bahwa dalam rangka permohonan penerbitan sertifikat tanah maka pihak ke ke dua telah menyerahkan kepada pihak pertama dan pihak pertama menerima dari pihak kedua dokumen dokumen sebagai berikut :</p>
                    <p>1. Sertifikat Kepemilijan Tanah <span style="color:red;">(No Fisik : {{$data->no_fisik}})</span></p>
                    <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adapun lampiran yang disrahkan pada Kantor Badan Pertanahan Kota banjarbaru sebagai  syarat pengambilan sertifikat adalah sebagai berikut :</p>
                    <p>1.Fotocopy KTP</p>
                    <p>2. Surat Kuasa</p>
                    <p>Demikian Tanda terima dokumen ini dibuat berdasarkan keadaan yang sebenarnya untuk dapat dipergunakan sebagaimana mestinya</p>
                </div>
                <br>
                <br>
                <table>
                    <tr>
                        <td>
                            <p>Pemohon Sertifikat</p>
                            <br>
                            <br>
                            <br>
                            {{$data->user->nama}}
                        </td>
                        <td>
                            <p style="margin:0px"> Banjarbaru,</p>
                            <h6 style="margin:0px">Mengetahui</h6>
                            <h5 style="margin:0px">Kepala Badan </h5>
                            <br>
                            <br>
                            <h5 style="text-decoration:underline; margin:0px">{{$kadis->nama}}</h5>
                            <h5 style="margin:0px">NIP. {{$kadis->nip}}</h5>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>