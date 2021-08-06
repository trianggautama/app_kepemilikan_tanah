@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Permohonan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Permohonan
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
            <div> 
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="{{Route('report.biodata_pemohon',$data->id)}}" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> cetak biodata</a>
                        <a href="{{Route('admin.pemohon.index')}}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>


        @endsection
        @section('script')
        <script>

        </script>
        @endsection