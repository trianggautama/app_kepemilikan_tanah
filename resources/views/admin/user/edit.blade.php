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
        <div class="row">
            <div class="col-md">
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
                                        <label for="firstName">Pangkat/Golongan</label>
                                        <select name="pangkat_id" id="" class="form-control" required>
                                            <option value="">Pilih Pangkat/Golongan</option>
                                            @foreach ($pangkat as $d)
                                            <option value="{{$d->id}}"
                                                {{$user->pangkat_id == $d->id ? 'selected' :'' }}>
                                                {{$d->nama_pangkat}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="firstName">Pilih Jabatan</label>
                                        <select name="jabatan_id" id="" class="form-control" required>
                                            <option value="">Pilih Jabatan</option>
                                            @foreach ($jabatan as $d)
                                            <option value="{{$d->id}}"
                                                {{$user->jabatan_id == $d->id ? 'selected' :'' }}>
                                                {{$d->nama_jabatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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
                                <label for="firstName">No Telepon</label>
                                <input type="text" name="no_telepon" value="{{$user->no_telepon}}"
                                    class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Role</label>
                                <select name="role" id="" class="form-control form-control-sm">
                                    <option value="">- pilih role -</option>
                                    <option value="1" {{$user->role == '1' ? 'selected' : ''}}>Admin</option>
                                    <option value="0" {{$user->role == '0' ? 'selected' : ''}}>Pemohon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="firstName">Username</label>
                                <input type="text" name="username" value="{{$user->username}}"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Password</label>
                                <input type="password" name="password" placeholder="isi password jika ingin mengubah"
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

        @endsection
        @section('script')
        <script>

        </script>
        @endsection