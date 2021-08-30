@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Peminjaman Berkas Filter Waktu</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Peminjaman Berkas Filter Waktu
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Cetak</li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <form action="{{Route('report.peminjaman_berkas.filter.cetak')}}" method="POST" target="__blank">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Tanggal Awal</label>
                                        <input type="date" name="tgl_awal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md">
                                        <label for="">Tanggal Akhir</label>
                                        <input type="date" name="tgl_akhir" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-sm btn-primary">Cetak Data</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
        <script>

        </script>
        @endsection