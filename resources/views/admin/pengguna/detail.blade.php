@extends('layouts.template-pakar')

@section('contents-pakar')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Beranda</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.pengguna')}}">Pengguna</a></li>
                <li class="breadcrumb-item active"><a href="#">Detail</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Detail Pengguna</h4><br>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('admin.pengguna', $data->id)}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="username">Username<span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="username" id="username" placeholder="Masukan Username Anda" value="{{$data->username}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="email">Email<span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="email" id="email" placeholder="Masukan Email Anda"  value="{{$data->email}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="name">Nama User<span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Masukan Nama Anda"  value="{{$data->name}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="jku">Jenis Kelamin User<span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="jku" id="jku" placeholder=""  value="{{$data->jenis_kelamin}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="alamat">Alamat <span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="Masukan Alamat Anda" readonly> {{$data->alamat}} </textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="phone">No. Hp<span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Masukan No. Hp Anda" value="{{$data->no_hp}}" readonly>
                                    </div>
                                </div>
                                <br><br>
                                <h4 class="card-title">Detail Balita</h4>
                                <br>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="nama">Nama Balita<span class="text-danger"></span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="nama" id="nama" placeholder=""" value="{{$data->nama_lengkap}}"readonly>
                                        </div>
                                    </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="jkb">Jenis Kelamin Balita<span class="text-danger"></span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="jkb" id="jkb" placeholder=""  value="{{$data->bjk}}" readonly>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="umur">Umur (Bulan) <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control"  name="umur" id="umur" placeholder="" value="{{$data->umur}}"readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="ttl">Tanggal Lahir <span class="text-danger"></span>
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control"  name="ttl" id="ttl" placeholder="" value="{{$data->ttl}}"readonly>
                                        </div>
                                    </div>


                                    <a href="{{route('admin.pengguna')}}"><button type="button" class="btn mb-1 button-edit">Kembali</button></a>

                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
