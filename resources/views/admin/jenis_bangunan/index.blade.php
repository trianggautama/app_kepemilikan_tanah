@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Jenis Bangunan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Jenis Bangunan
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
                    <div class="card-header text-right">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#modal-add-event">
                            <i class="fa fa-plus mr-1"></i> Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="basic-data-table">
                        <table class="table table-bordered"  id="basic-data-table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Kode Jenis</td>
                                    <td>Nama Jenis</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)

                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$d->kode_jenis}}</td>
                                    <td>{{$d->nama_jenis}}</td>
                                    <td class="text-center">
                                        <form action="{{Route('admin.jenis_bangunan.destroy',$d->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{Route('admin.jenis_bangunan.edit',$d->id)}}"
                                                class="btn btn-sm btn-info"> <i class="fa fa-pencil"></i> Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                    class="fa fa-trash"></i>Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Event Button  -->
        <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form action="{{Route('admin.jenis_bangunan.store')}}" method="POST">
                        @csrf
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body px-4">
                            <div class="form-group">
                                <label for="firstName">Kode Jenis</label>
                                <input type="text" name="kode_jenis" class="form-control form-control-sm"
                                    placeholder="Kode Jenis">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Nama Jenis</label>
                                <input type="text" name="nama_jenis" class="form-control form-control-sm"
                                    placeholder="Nama Jenis">
                            </div>
                        </div>
                        <div class="modal-footer border-top-0 px-4 pt-0">
                            <button type="submit" class="btn btn-sm btn-primary  m-0">Simpan Data</button>
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