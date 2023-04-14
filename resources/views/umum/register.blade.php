@extends('layouts.template')

@section('contents')
<div class="content-body">



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="form-validation">
                        <form class="form-valide" action="{{route('registrasi')}}" method="POST">

                        <div  class="alert alert-alert">
                        </br>
                            <h3 class="text-center "><b>Register</b></h3></br>
                            @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="username">Username<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="username" id="username" placeholder="Masukan Username Anda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="password">Password<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control"  name="password" id="password" placeholder="Masukan Password Anda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="email">Email<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="email" id="email" placeholder="Masukan Email Anda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="name">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  name="name" id="name" placeholder="Masukan Nama Anda">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="jku">Jenis Kelamin User<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-select form-control" name="jku" id="jku">
                                            <option selected>Open this select menu</option>
                                            <option  value="Laki-Laki">Laki-Laki</option>
                                            <option  value="Perempuan">Perempuan</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="alamat">Alamat <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="alamat" class="form-control" cols="30" rows="5" placeholder="Masukan Alamat Anda"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="phone">No. Hp<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Masukan No. Hp Anda">
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
                                        <button type="submit"  class="btn button-tambah">Register</button>
                                        <a href='{{route('home-utama')}}'  class="btn button-edit"> Kembali</a>
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
