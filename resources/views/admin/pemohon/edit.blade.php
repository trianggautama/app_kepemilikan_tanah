@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Pemohon</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Pemohon
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
                    <form action="{{Route('admin.pemohon.update',1)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">Nama</label>
                                <input type="text" name="nama" class="form-control form-control-sm"
                                    placeholder="Nama Pemohon">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control form-control-sm"
                                    placeholder="Nama Kota / Kabupaten">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Username</label>
                                <input type="text" name="username" class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Password</label>
                                <input type="password" name="password" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('admin.pemohon.index')}}" class="btn btn-sm btn-secondary">kembali</a>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
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