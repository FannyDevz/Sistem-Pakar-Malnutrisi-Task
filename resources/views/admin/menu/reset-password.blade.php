@extends('layouts.template-pakar')

@section('contents-pakar')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}">Beranda</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{route('admin.reset-password')}}">Reset-Password</a>
            </li>
            </ol>
        </div>
    </div>
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
                            </br>
                                <a class="text-center" href="#"> <h3>Reset Password</h3></a>
                            </br>
                            <form method="POST" action="{{route('admin.reset-password.store')}}">
                                    @csrf



                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi Lama') }}</label>

                                        <div class="col-md-6">
                                            <input  type="password" class="form-control @error('password_old') is-invalid @enderror" name="password_old" value="{{ $password_old ?? old('password_old') }}" required autocomplete="email" autofocus>

                                            @error('password_old')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi Baru') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Kata Sandi Baru') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
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
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn ">
                                                {{ __('Simpan') }}
                                            </button>
                                        </div>
                                    </div>
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
