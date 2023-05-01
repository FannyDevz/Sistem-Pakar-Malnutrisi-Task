@extends('layouts.template-user')

@section('contents-user')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb"><li class="breadcrumb-item">
                <a href="{{route('user.home')}}">Beranda</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">Data User</a>
            </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('user.data-user.update', $data->id)}}" method="post">
                                @csrf

                            <h3 class="text-center "><b>Edit Data Pengguna</b></h3></br>
                            <div class="form-group row">

                                <div class="col-lg-6">
                                    <input type="hidden" class="form-control"  name="id" id="id"  value="{{$data->id}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Nama User<span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control"  name="name" id="name"  value="{{$data->name}}">
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="username">Username<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="username" id="username"  value="{{$data->username}}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="email">Email<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" name="email" id="email" value="{{ $data->email }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-select form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option  value="{{$data->jenis_kelamin}}">{{$data->jenis_kelamin}}</option>
                                            <option  value="Laki-Laki">Laki-Laki</option>
                                            <option  value="Perempuan">Perempuan</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="no_hp">No HP<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="no_hp" id="no_hp"  value="{{$data->no_hp}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="alamat">Alamat<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control" name="alamat" id="alamat" rows="4">{{$data->alamat}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="password">Password<span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                      <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                  </div>
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn button-tambah">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
