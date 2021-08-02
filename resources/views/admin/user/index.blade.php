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
          <div class="card-header text-right">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-add-event">
              <i class="fa fa-plus mr-1"></i> Tambah Data
            </button>
          </div>
          <div class="card-body">
          <div class="basic-data-table">
            <table class="table table-bordered" id="basic-data-table">
              <thead>
                <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Role</td>
                  <td>Username</td>
                  <td class="text-center">Aksi</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $d) 

                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$d->nama}}</td>
                  <td>
                    @if ($d->role == 0)
                    Pemohon
                    @elseif($d->role == 1)
                    Admin
                    @elseif($d->role == 2)
                    Tim peneliti
                    @elseif($d->role == 3)
                    Ketua peneliti
                    @elseif($d->role == 4)
                    Kasi
                    @elseif($d->role == 5)
                    Kepala Badan
                    @elseif($d->role == 6)
                    Admin Arsip
                    @else
                    -
                    @endif
                  </td>
                  <td>{{$d->username}}</td>
                  <td class="text-center">
                    <form action="{{Route('admin.user.destroy',$d->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <a href="{{Route('admin.user.edit',$d->id)}}" class="btn btn-sm btn-info"> <i
                          class="fa fa-pencil"></i> Edit</a>
                      <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</button>
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
    <div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <form action="{{Route('admin.user.store')}}" method="POST">
            @csrf
            <div class="modal-header px-4">
              <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body px-4">
              <div class="form-group">
                <label for="firstName">NIP</label>
                <input type="text" name="nip" class="form-control form-control-sm">
              </div>
              <div class="form-group">
                <label for="firstName">Nama</label>
                <input type="text" name="nama" class="form-control form-control-sm">
              </div>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="firstName">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control form-control-sm">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                    <label for="firstName">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control form-control-sm">
                  </div>
                </div>
              </div>
              <label for="firstName">Jenis kelamin</label>
              <div class="row">
                <div class="col-md">
                  <label class="control control-radio">Laki - laki
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" checked="checked" />
                    <div class="control-indicator"></div>
                  </label>
                </div>
                <div class="col-md">
                  <label class="control control-radio">Perempuan
                    <input type="radio" name="jenis_kelamin" value="Perempuan" />
                    <div class="control-indicator"></div>
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label for="firstName">Alamat</label>
                <textarea name="alamat" id="" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="firstName">Pangkat Golongan</label>
                <select name="" id="" class="form-control form-control-sm">
                  <option value="">- pilih pangkat golongan -</option>
                </select>
              </div>
              <div class="form-group">
                <label for="firstName">Jabatan</label>
                <select name="" id="" class="form-control form-control-sm">
                  <option value="">- pilih jabatan -</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="firstName">Role</label>
                <select name="role" id="" class="form-control form-control-sm">
                  <option value="">- pilih role -</option>
                  <option value="1">Admin Pendaftaran</option>
                  <option value="2">Tim Panitia / Peneliti Tanah</option>
                  <option value="3">Ketua Panitia / Peneliti Tanah</option>
                  <option value="4">Kepala Seksi</option>
                  <option value="5">Kepala Kantor</option>
                  <option value="6">Admin Arsip</option>
                  <!-- <option value="0">Pemohon</option> -->
                </select>
              </div>
              <div class="form-group">
                <label for="firstName">no hp</label>
                <input type="text" name="" class="form-control form-control-sm">
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