@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content p-4">
        <div class="breadcrumb-wrapper d-flex justify-content-between align-items-center mb-0">
            <div>
                <h1>Pangkat</h1>
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
                    <div class="card-header text-right">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#modal-add-event">
                            <i class="mdi mdi-plus mr-1"></i> Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="basic-data-table">
                            <table class="table table-bordered" id="basic-data-table">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Kode Pangkat</td>
                                        <td>Nama Pangkat</td>
                                        <td class="text-center">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->kode_pangkat}}</td>
                                        <td>{{$d->nama_pangkat}}</td>
                                        <td class="text-center">
                                            <form action="{{Route('admin.pangkat.destroy',$d->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="{{Route('admin.pangkat.edit',$d->id)}}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="mdi mdi-pencil"></i> Edit</a>
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="mdi mdi-delete"></i>Hapus</button>
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
                    <form action="{{route('admin.pangkat.store')}}" method="POST">
                        @csrf
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body px-4">

                            <div class="form-group">
                                <label for="firstName">Kode Pangkat</label>
                                <input type="text" name="kode_pangkat" class="form-control form-control-sm"
                                    placeholder="Kode Pangkat">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Nama Pangkat</label>
                                <input type="text" name="nama_pangkat" class="form-control form-control-sm"
                                    placeholder="Nama Pangkat">
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