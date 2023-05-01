@extends('layouts.template-user')

@section('contents-user')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb"><li class="breadcrumb-item">
                <a href="{{route('user.home')}}">Beranda</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">Data Balita</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">Edit Balita</a>
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
                            <form class="form-valide" action="{{route('user.balita.update', $data->id)}}" method="post">
                                @csrf

                            <h3 class="text-center "><b>Edit Data Balita</b></h3></br>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="nama_lengkap">Nama Balita<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="nama_lengkap" id="nama_lengkap"  value="{{$data->nama_lengkap}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="jenis_kelamin">Jenis Kelamin Balita<span class="text-danger">*</span>
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
                                    <label class="col-lg-4 col-form-label" for="umur">Umur (Bulan)<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="umur" id="umur"  value="{{$data->umur}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="ttl">Tempat Tanggal Lahir <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control"  name="ttl" id="ttl"  value="{{$data->ttl}}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn button-tambah">Simpan</button>
                                        <a href="{{route('user.balita')}}" class="btn button-edit">Kembali</a>
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
