@extends('layouts.template-pakar')

@section('contents-pakar')

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
                    <a href="{{ route('admin.home') }}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{ route('admin.log-konsultasi') }}">Hasil Diagnosa</a>
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
                        <h4>Kode Penyakit: {{ $penyakit->kd_penyakit }}</h4>
                        <h4>Nama Penyakit: {{ $penyakit->nama_penyakit }}</h4>

                        <div class="rumus-section">
                            <h5 class="rumus-title">Rumus:</h5>
                            <p class="rumus-content">{{ $rumus }}</p>
                        </div>

                        <h5>Data Diagnosa:</h5>
                        <p>ID Diagnosa: {{ $data->id }}</p>
                        <p>Tanggal Diagnosa: {{ $data->tanggal_diagnosa }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
