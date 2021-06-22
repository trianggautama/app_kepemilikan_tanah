@extends('layouts.main')
@section('content')
<div class="content-wrapper">
        <div class="content p-4">
            <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
                <div>
                    <h1>User</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>                
                            </a>
                            </li>
                            <li class="breadcrumb-item">
                            User
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>
            <div>
        </div>
    </div>
    <div class="row" >
        <div class="col-md">
            <div class="card"> 
                <div class="card-body">
                    <div class="form-group">
                        <label for="firstName">Kode Jabatan</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Kode Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="firstName">Nama Jabatan</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Nama Jabatan">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.jabatan.index')}}" class="btn btn-sm btn-secondary">kembali</a>
                    <button class="btn btn-sm btn-primary">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script') 
    <script>
           
    </script>
@endsection