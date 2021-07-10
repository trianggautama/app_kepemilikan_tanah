@extends('layouts.main')
@section('content')
<div class="content-wrapper">
        <div class="content p-4">
            <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
                <div>
                    <h1>Beranda</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>                
                            </a>
                            </li>
                            <li class="breadcrumb-item">
                            Admin
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Beranda</li>
                        </ol>
                    </nav>
                </div>
            <div>
        </div>
    </div>
    <div class="row" >
        <div class="col-md">
            <div class="card">
                <div class="card-body text-center">
                    <h4>Selamat Datang ({{Auth::user()->nama}})</h4>
                    di Aplikasi Layanan Pendaftaran dan pengarsipan sertifikat berbasis web pada BPN Kota Banjarbaru
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script') 
    <script>
           
    </script>
@endsection