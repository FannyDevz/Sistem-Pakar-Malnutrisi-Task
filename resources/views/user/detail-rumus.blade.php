@extends('layouts.template-user')

@section('contents-user')

<style>
    .rumus-section {
        margin-bottom: 20px;
    }

    .rumus-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .rumus-content {
        font-size: 16px;
        line-height: 1.5;
    }
</style>

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('user.home') }}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{ route('user.log-konsultasi') }}">Hasil Diagnosa</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="#">Detail</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="#">Detail Rumus</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Rumus</div>

                    <div class="card-body">
                        {{-- <h4>Kode Penyakit: {{ $penyakit->kd_penyakit }}</h4> --}}

                        <h4><b>Nama Penyakit: {{ $penyakit->nama_penyakit }}</b></h4>
                        <br>
                        <div class="card-body alert-success">

                        <h4><b>Rumus:</b></h4>
                        <h6><b>{{ $rumus }}</b></h6>
                        </div><br>
                        <p>Tanggal Diagnosa: {{ $data->tanggal_konsultasi }}</p>
                        <br>
                        <h6><b>Gejala Yang Biasanya Terjadi pada Penyakit {{$penyakit->nama_penyakit}} : </b></h6>
                       <p>
                           <div class="bootstrap-label">
                               @foreach ($gejala as $item)
                                  <span class="label label-pink"> {{$item->gejala->gejala}}</span>
                               @endforeach
                              </div>

                       </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
