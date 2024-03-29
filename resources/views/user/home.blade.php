@extends('layouts.template-user')

@section('contents-user')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('user.home')}}">Beranda</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-body ">
                        <br>
                        <div class="alert alert">
                            <style>
                                .card-body img {
                                 display: block;
                                 margin: 0 auto;

                               }
                               .btn.button-tambah {
                                   width: 100%;
                                   padding: 5px 20px;
                               }
                               .card-link {

                                 display: block;
                                 margin: 0 auto;
                               }
                               .image-body {
                                    display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                    width: 100%;
                                    border-radius: 8px;
                                }
                                   </style>
                            <h1 class="text-center "><b>Sistem Pakar Diagnosa Malnutrisi Pada Balita</b></h1></br>

                            <img class="image-body" src="{{asset('images/cOBA.jpg')}}" alt="..." class="img-thumbnail"></br>
                            <p class="text-center">Aplikasi <b>Sistem Pakar</b> ini meniru cara berfikir seorang ahli kesehatan dalam melakukan
                            diagnosis suatu kasus penyakit. Aplikasi ini membantu dalam mecari kesimpulan akan penyakit yang diderira beserta pencegahan dan pengobatan yang sesuai
                            . Program aplikasi ini menganalisa data penyakit malnutrisi, anamnesis awal serta gejala-gejala dari suatu penyakit.</p></br>
                        <div class="text-center ">
{{--                            <p>Validasi Value: {{ $validasi }}</p>--}}
                            @if($validasi2 == 1)
                                <a  type="button" class="btn btn-success col-lg-5 " href="{{route('diagnosa.list')}}">DAFTAR KAN BAYI TERLEBIH DAHULU</a>
                            @elseif($validasi == 0 && $validasi2 == 0)
                                <a  type="button" class="btn btn-danger col-lg-5 " href="{{route('diagnosa.list')}}">DIAGNOSA BERDASARKAN GEJALA</a>
                            @else
                                <a  type="button" class="btn btn-primary col-lg-5 " href="{{route('diagnosabc.list')}}">DIAGNOSA BERDASARKAN PENYAKIT</a>
                            @endif
                        </div>
                        </br>
                        </div>
                        <div class="alert alert-alert"></br>
                            <h3 class="text-center  "><b>LANGKAH DIAGNOSA</b></h3></br>
                            <img class="image-body" src="{{asset('images/Ko.jpg')}}" alt="..." class="img-thumbnail"></br>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
