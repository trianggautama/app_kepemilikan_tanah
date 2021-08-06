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
        border: 1px solid black;
      }
      th{
        text-align: center;
      }
      td{
        text-align: center;
        height: 10px !important;
        padding: 0px;
      }
      td p{
          margin: 3px;
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
     p{
         font-size: 12px;
     } 
     @page { 
         size: 18 cm 18 cm ; 
         }
    </style>
</head>
<body>
    <div class="container">
    <h5 style="text-align: center;">RIWAYAT DOKUMEN</h5>
                <table style=" border: 1px solid black; width:100%" >
                    <tr >
                        <td ><P>NO</P></td>
                        <td ><P>KEGIATAN</P></td>
                        <td ><P>PENANGGUNG JAWAB</P></td>
                        <td ><P>PETUGAS NAMA</P></td>
                        <td ><P>TGL TERIMA</P></td>
                        <td ><P>TTD</P></td>
                    </tr>
                    <tr>
                        <td><p>1.</p></td>
                        <td><p>Penerimaan dan Cek Berkas</p></td>
                        <td><p>Admin CS</p></td>
                        <td></td>
                        <td><p>{{Carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}</p></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><p>2.</p></td>
                        <td><p>Perosesan <br> - Cek Ulang Berkas / Validasi</p></td>
                        <td><p>Admin CS</p></td>
                        <td><p>-</p></td>
                        <td><p>-</p></td>
                        <td></td> 
                    </tr>
                    <tr>
                        <td><p>3.</p></td>
                        <td><p>Pelaksanaan Pengukuran dan Pemetaan</p></td> 
                        <td><p>Tim Peneliti Teknis</p></td>
                        <td><p>-</p></td>
                        <td><p>{{Carbon\carbon::parse($data->survei->tanggal_survei)->translatedFormat('d F Y')}}</p></td>
                        <td></td> 
                    </tr>
                    <tr>
                        <td><p>4.</p></td>
                        <td><p>Verifikasi Kepala Survey, Seksi dan Pemetaan</p></td>
                        <td><p>Kepala Tim Peneliti Teknis</p></td>
                        <td><p>-</p></td>
                        <td><p>-</p></td>
                        <td></td> 
                    </tr>
                    <tr>
                        <td><p>5.</p></td>
                        <td><p>erifikasi Sub Seksi Pemetaan Hak Tanah dan Pemberdayaan Masyarakat</p></td>
                        <td><p>Kepala Seksi</p></td>
                        <td><p>-</p></td>
                        <td><p>-</p></td>
                        <td></td> 
                    </tr>
                    <tr>
                        <td><p>6.</p></td>
                        <td><p>Verifikasi Kepala Kantor Pertanahan / Penerbitan Sertifikat</p></td>
                        <td><p>Kepala Badan Pertanahan  Kota Banjarbaru</p></td>
                        <td><p>-</p></td>
                        <td><p>-</p></td>
                        <td></td> 
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td colspan="4"><p>TOTAL WAKTU PROSES</p></td>
                        <td colspan="2"><p>................Hari</p></td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <p><p>CATATAN KHUSUS :</p> <br><br><br><br><br><br><br></p>
                        </td>
                    </tr>
                </table>
    </div>
</body>
</html>