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
                        <li class="breadcrumb-item" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md">
                                Data Permohonan
                            </div> 
                            <div class="col-md text-right">
                                <a href="{{Route('pemohon.permohonan_pemohon.index')}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td width="20%">Nama</td>
                                <td width="2%">:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Tempat, Tanggal lahir</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>No Hp</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        Data Permohonan Izin
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <td width="20%">Jenis Bangunan</td>
                                <td width="2%">:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Kelurahan</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>No fisik</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>No Yuridis</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>NIB</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Letak Tanah</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Dikuasai Awal</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Dikuasai Pemohon</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Dengan Dasar</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Dasar</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>No Register</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Luas</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>-</td>
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