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
                <div class="card-header text-right">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-add-event">
                        <i class="mdi mdi-plus mr-1"></i> Tambah Data
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Role</td>
                                <td>Username</td>
                                <td class="text-center" >Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td class="text-center">
                                    <form action="{{Route('admin.user.destroy','1')}}">
                                    @csrf
                                    @method('DELETE')
                                        <a href="{{Route('admin.user.edit','1')}}" class="btn btn-sm btn-info"> <i class="mdi mdi-pencil"></i> Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i>Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Add Event Button  -->
<div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header px-4">
          <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body px-4">
          <div class="form-group">
            <label for="firstName">NIP</label>
            <input type="text" class="form-control form-control-sm">
          </div>
          <div class="form-group">
            <label for="firstName">Nama</label>
            <input type="text" class="form-control form-control-sm">
          </div>
          <div class="row">
            <div class="col-md">
              <div class="form-group">
                <label for="firstName">Tempat Lahir</label>
                <input type="text" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-md">
              <div class="form-group">
                <label for="firstName">Tanggal Lahir</label>
                <input type="date" class="form-control form-control-sm">
              </div>
            </div>
          </div>
          <label for="firstName">Jenis kelamin</label>
          <div class="row">
            <div class="col-md">
              <label class="control control-radio">Laki - laki
								<input type="radio" name="radio1" checked="checked" />
								<div class="control-indicator"></div>
							</label>
            </div>
            <div class="col-md">
              <label class="control control-radio">Perempuan
								<input type="radio" name="radio1" />
								<div class="control-indicator"></div>
							</label>
            </div>
          </div>
          <div class="form-group">
            <label for="firstName">Alamat</label>
           <textarea name="" id="" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="firstName">Role</label>
            <select name="role" id="" class="form-control form-control-sm">
                <option value="">- pilih role -</option>
                <option value="1">Role 1</option>
                <option value="2">role 2</option>
            </select>
          </div>
          <div class="form-group">
            <label for="firstName">Username</label>
            <input type="text" class="form-control form-control-sm">
          </div>
          <div class="form-group">
            <label for="firstName">Password</label>
            <input type="password" class="form-control form-control-sm">
          </div>
        </div>
        <div class="modal-footer border-top-0 px-4 pt-0">
          <button type="button" class="btn btn-sm btn-primary  m-0">Simoan Data</button>
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