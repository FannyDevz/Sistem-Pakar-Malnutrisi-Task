@extends('layouts.template')

@section('contents')
<div class="content-body">

    {{-- <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb"><li class="breadcrumb-item">
                <a href="{{route('home-utama')}}">Beranda</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{route('home')}}">Login</a>
            </li>
            </ol>
        </div>
    </div> --}}
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="#"> <b><h3>Login</h3></b></a>

                                <form class="mt-5 mb-5 login-input" method="post" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
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
                                    <button class="btn button-tambah submit w-100">LOGIN</button>
                                </form>
                            </div>
                        </div>
                    </div>
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
