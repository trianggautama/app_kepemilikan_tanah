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
                    <div class="card">
                        <form action="{{Route('admin.user.update',$user->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="firstName">NIP</label>
                                    <input type="text" name="nip" value="{{$user->nip}}"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="firstName">Nama</label>
                                    <input type="text" name="nama" value="{{$user->nama}}"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="firstName">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" value="{{$user->tempat_lahir}}"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="firstName">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" value="{{$user->tanggal_lahir}}"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>
                                <label for="firstName">Jenis kelamin</label>
                                <div class="row">
                                    <div class="col-md">
                                        <label class="control control-radio">Laki - laki
                                            <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                                checked="{{$user->jenis_kelamin == 'Laki-laki' ? 'checked' :'' }}" />
                                            <div class=" control-indicator"></div>
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <label class="control control-radio">Perempuan
                                            <input type="radio" name="jenis_kelamin" value=" Perempuan"
                                                checked="{{$user->jenis_kelamin == 'Perempuan' ? 'checked' :'' }}" />
                                            <div class="control-indicator"></div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstName">Alamat</label>
                                    <textarea name="alamat" id="" class="form-control">{{$user->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="firstName">Username</label>
                                    <input type="text" name="username" value="{{$user->username}}"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="form-group">
                                    <label for="firstName">Password</label>
                                    <input type="password" name="password"
                                        placeholder="isi password jika ingin mengubah"
                                        class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{Route('admin.user.index')}}" class="btn btn-sm btn-secondary">kembali</a>
                                <button type="submit" class="btn btn-sm btn-primary">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
        <script>

        </script>
        @endsection