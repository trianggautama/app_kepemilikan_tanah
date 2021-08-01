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
                            Pangkat
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <div>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <form action="{{Route('admin.pangkat.update',$pangkat->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstName">Kode Pangkat</label>
                                <input type="text" name="kode_pangkat" value="{{$pangkat->kode_pangkat}}"
                                    class="form-control form-control-sm" placeholder="Kode Pangkat">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Nama Pangkat</label>
                                <input type="text" name="nama_pangkat" value="{{$pangkat->nama_pangkat}}"
                                    class="form-control form-control-sm" placeholder="Nama Pangkat">
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('admin.pangkat.index')}}" class="btn btn-sm btn-secondary">kembali</a>
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