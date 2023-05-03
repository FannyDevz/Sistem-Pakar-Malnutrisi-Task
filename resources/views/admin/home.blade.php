@extends('layouts.template-pakar')

@section('contents-pakar')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.home')}}">Beranda</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="container-fluid">
        <style>
            /* Style untuk card */
            .card {
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                margin-bottom: 20px;
            }

            /* Style untuk card title */
            .card h3 {
                margin-top: 0;
                margin-bottom: 10px;
                font-size: 24px;
                font-weight: normal;
            }

            /* Style untuk total angka */
            .total {
                font-size: 36px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            /* Style untuk container card */
            .card-container {
                display: flex;
                flex-wrap: wrap;
            }

            /* Style untuk card width */
            .card {
                flex-basis: calc(25% - 20px);
                margin-right: 20px;
            }


            /* Style untuk card terakhir */
            .card:last-child {
                margin-right: 0;
            }

            /* Style untuk background dan teks warna pada setiap card */
            #gejala-card {
                background-color: #2196f3;
                color: #fff;
            }

            #penyakit-card {
                background-color: #4caf50;
                color: #fff;
            }

            #user-card {
                background-color: #f44336;
                color: #fff;
            }

            #aturan-card {
                background-color: #ffeb3b;
                color: #fff;
            }
        </style>
        <div class="card-container">
            <!-- Card 1 -->
            <div class="card" id="gejala-card">
                <h3><b>Jumlah Gejala</b></h3>
                <div class="total">{{ $totalGejala }}</div>
            </div>

            <!-- Card 2 -->
            <div class="card" id="penyakit-card">
                <h3><b>Jumlah Penyakit</b></h3>
                <div class="total">{{ $totalPenyakit }}</div>
            </div>

            <!-- Card 3 -->
            <div class="card" id="user-card">
                <h3><b>Jumlah User</b></h3>
                <div class="total">{{ $totalUser }}</div>
            </div>

            <!-- Card 4 -->
            <div class="card" id="aturan-card">
                <h3><b>Jumlah Konsultasi</b></h3>
                <div class="total">{{ $totalDiagnosa }}</div>
            </div>
        </div>
    </div>
</div>

@endsection
