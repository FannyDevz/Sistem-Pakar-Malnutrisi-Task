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
                            <div class="alert alert-alert">
                            <h1 class="text-center "><b>SELAMAT DATANG DI SISTEM PAKAR DIAGNOSA MALNUTRISI PADA ANAK</b></h1></br>
                            <img class="image-body" src="{{asset('images/cOBA.jpg')}}" alt="..." class="img-thumbnail"></br>
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

                            <div class="alert alert-success">
                            </br>
                            <h3 class="text-center  "><b>INFORMASI PENYAKIT</b></h3></br>
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
                                   </style>
                        <div class="row">
                            @foreach($penyakits as $p)
                                <div class="col-lg-4">
                                    <div class="card mb-3">
                                        <div class="card-body ">
                                            @if ($p->gambar)
                                            <img  src="{{asset('images/' . $p->gambar)}}" alt="Gambar {{ $p->nama_penyakit }}" width="200px"></br></br>
                                            @else

                                            <img  src="{{asset('images/no_image.png')}}" alt="Gambar {{ $p->nama_penyakit }}" width="200px"></br></br>
                                            @endif

                                            <h5 class="card-title text-center ">{{$p->nama_penyakit}}</h5>
                                            <p class="card-text text-center">{{Str::limit(strip_tags($p->deskripsi), 150)}}</p>
                                            <a href="{{route('show', $p->id)}}" class=" btn button-tambah card-link">Selengkapnya</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <a   class=" col-md-3" href=""></a>
                            <a  type="button" class="btn btn-danger col-md-6" href="{{route('info-penyakit')}}">INFORMASI LEBIH LENGKAP</a>
                            <a   class=" col-md-3" href=""></a>
                        </div>
                        </br>
                        </div>
                       <div class="alert alert-alert"></br>
                            <h3 class="text-center  "><b>LANGKAH KONSULTASI</b></h3></br>
                            <img class="image-body" src="{{asset('images/Ko.jpg')}}" alt="..." class="img-thumbnail"></br>


                        </div>

                            <style type="text/css">
                                .image-body {
                                    display: block;
                                    margin-left: auto;
                                    margin-right: auto;
                                    width: 100%;
                                    border-radius: 8px;
                                }
                            </style>
                            {{-- <img class="image-body" src="https://dprd.ketapangkab.go.id/wp-content/uploads/2022/09/Brown-Pastel-Flowchart-Diagram-Graph-Template.png" alt="..." class="img-thumbnail"> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
@endsection
