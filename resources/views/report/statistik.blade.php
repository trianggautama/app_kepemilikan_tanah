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
<body onload="window.print();">
    <div class="header">
            <div class="logo">
                    <img  class="pemko" src="{{asset('ATR.png')}}">
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
            <h2 style="text-align:center;">STATISTIK PERMOHONAN</h2>
            <br>
            <table>
                <tr>
                    <td width="30%"><h5>Permohonan Berdasarkan Progress :</h5></td>
                    <td style="text-align: center;">
                    <div class="" style="width:50%;margin-left:30px;"><canvas id="myChart"></canvas></div>
                    </td>
                </tr>
            <table>
               <thead>
                   <tr>
                       <th>Belum di verifikasi</th>
                       <th>Survei Lapangan</th>
                       <th>Kepala Seksi</th>
                       <th>Kepala BPN</th>
                       <th>Arsip</th>
                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>{{$data->where('status',0)->count()}} Permohonan</td>
                       <td>{{$data->where('status',2)->count()}} Permohonan</td>
                       <td>{{$data->where('status',3)->count()}} Permohonan</td>
                       <td>{{$data->where('status',4)->count()}} Permohonan</td>
                       <td>{{$data->where('status',5)->count()}} Permohonan</td>
                   </tr>
               </tbody>
            </table>
            <br>
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

        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['belum verifikasi','survei lapangan','kepala seksi','kepala BPN','arsip'],
                    datasets: [{
                        label: 'Progress Permohonan ',
                        data: [{{$data->where('status',0)->count()}}, {{$data->where('status',2)->count()}}, {{$data->where('status',3)->count()}}, {{$data->where('status',4)->count()}}, {{$data->where('status',5)->count()}}],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
            
            });

            
            </script>
    </body>
</html>