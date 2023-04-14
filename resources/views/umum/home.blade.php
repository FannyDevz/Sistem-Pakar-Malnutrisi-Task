@extends('layouts.template')

@section('contents')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-body ">
                        <br>
                        <div class="alert alert-alert">
                            <h1 class="text-center "><b>Petunjuk Penggunaan</b></h1></br>
                            <style type="text/css">
                                .image-body {
                                    display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                    width: 100%;
                                    border-radius: 8px;
                                }
                            </style>
                            <img class="image-body" src="https://dprd.ketapangkab.go.id/wp-content/uploads/2022/09/Brown-Pastel-Flowchart-Diagram-Graph-Template.png" alt="..." class="img-thumbnail">
                        </br>
                        <p class="text-center">Aplikasi <b>Sistem Pakar</b> ini meniru cara berfikir seorang ahli kesehatan dalam melakukan
                            diagnosis suatu kasus penyakit. Aplikasi ini membantu dalam mecari kesimpulan akan penyakit yang diderira beserta pencegahan dan pengobatan yang sesuai
                            . Program aplikasi ini menganalisa data penyakit malnutrisi, anamnesis awal serta gejala-gejala dari suatu penyakit.</p></br>
                            <div class="text-center ">
                        <a  type="button" class="btn btn-danger col-md-4" href="{{route('register')}}">REGISTER</a>
                        <a  type="button" class="btn btn-primary col-md-4" href="{{route('login')}}">LOGIN</a>
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
