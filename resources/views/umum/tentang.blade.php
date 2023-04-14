@extends('layouts.template')

@section('contents')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home-utama')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('tentang')}}">Tentang</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <div class="alert alert-success">
                            <h3>Tentang Kami</h3>
                            <p>Sistem pakar ini dibangun hanya untuk diagnosa manlutrisi pada bayi dengan menggunakan metode <i>Forward Chaining</i>.
                                Terimakasih
                                </p>

                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
