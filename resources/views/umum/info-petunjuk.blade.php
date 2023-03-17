@extends('layouts.template')

@section('contents')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb"><li class="breadcrumb-item">
                <a href="{{route('home-utama')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{route('info-petunjuk')}}">Info Petunjuk</a>
            </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-success">
                            <h3>Petunjuk</h3>
                            <p>
                           1. Sebelum anda mendiagnosa penyakit anda, silahkan daftar terlebih dahulu <a href="{{route('register')}}"><i>DISINI</i></a> <br>
                           2. Jika sudah selesai silahkan login disini <a href="{{route('login')}}"><i>DISINI</i></a> <br>
                           3. Setelah berhasil login silakan pilih menu diagnosa berdasarkan penyakit atau gejala,<br>
                           4. Ikuti dan berikan jawaban sesuai dengan apa yang dirasakan, <br>
                           4. Klik tombol diagnosa,  <br>
                           5. Hasil diagnosa, pada halaman ini anda bisa export hasil dalam format PDF
                            </p>
                             <hr>
                             <p>Terimakasih</p>
                 </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
