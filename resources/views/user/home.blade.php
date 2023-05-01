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
                        <a  type="button" class="btn btn-primary col-md-4" href="{{route('diagnosa.list')}}">DIAGNOSA BERDASARKAN GEJALA [FORWARD CHAINING]</a>
                        <a  type="button" class="btn btn-primary col-md-4" href="{{route('diagnosabc.list')}}">DIAGNOSA BERDASARKAN PERSENTASE PENYAKIT [BACKWARD CHAINING]</a>
                            </div>
                        </br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
