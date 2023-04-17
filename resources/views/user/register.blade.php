@extends('layouts.template-user')

@section('contents-user')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb"><li class="breadcrumb-item">
                <a href="{{route('user.home')}}">Beranda</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{route('user.register')}}">Register</a>
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
                        <form class="form-valide" action="{{route('user.registrasi')}}" method="POST">

                        <div  class="alert alert-">

                            <h3 class="text-center "><b>Data Balita</b></h3></br>
                            @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="nama">Nama Balita<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="nama" id="nama" placeholder="Masukan Nama Balita">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="jkb">Jenis Kelamin Balita<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-select form-control" name="jkb" id="jkb">
                                            <option selected>Pilih Jenis Kelamin</option>
                                            <option  value="Laki-Laki">Laki-Laki</option>
                                            <option  value="Perempuan">Perempuan</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="umur">Umur <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="umur" id="umur" placeholder="Masukan Umur Balita (Bulan) ">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="ttl">Tempat Tanggal Lahir <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="date" class="form-control"  name="ttl" id="ttl" placeholder="">
                                    </div>
                                </div>
                        </div>

                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <style>
                                            button {
                                                background-color: #000;
                                                color: #fff;
                                                border: none;
                                                padding: 10px 20px;
                                                border-radius: 5px;
                                                font-size: 16px;
                                                cursor: pointer;
                                                transition: background-color 0.3s ease-in-out,
                                                color 0.3s ease-in-out;
                                            }

                                            button:hover {
                                                background-color: #fff;
                                                color: #000;
                                                outline: 2px solid #000;
                                            }
                                            </style>
                                        <button type="submit" class="btn button-tambah">Tambah Data Balita</button>
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
