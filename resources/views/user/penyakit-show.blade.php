@extends('layouts.template-user')

@section('contents-user')
<div class="content-body">

    <!-- row -->
    <style>
         .card-body img {
         display: block;
         margin: 0 auto;
         }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        .card-title {
            background-color: #ff9100;
            color: #fff;
        }
        .card-img-top:hover {
            transform: scale(1.05);
        }
        .btn {
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ $penyakit->nama_penyakit }}</div>

                    <div class="card-body">
                        @if ($penyakit->gambar)
                        <img  src="{{asset('images/' . $penyakit->gambar)}}" alt="Gambar {{ $penyakit->nama_penyakit }}" width="200px"></br></br>
                        @else

                        <img  src="{{asset('images/no_image.png')}}" alt="Gambar Kosong" width="200px"></br></br>
                        @endif
                        <p class="card-text text-center">{{ $penyakit->deskripsi }}</p>

                        <h5 class="card-title text-center">Penyebab</h5>
                        <p class="card-text text-center">{{ $penyakit->penyebab }}</p>

                        <h5 class="card-title text-center">Pencegahan</h5>
                        <p class="card-text text-center">{{ $penyakit->pencegahan }}</p>

                        <h5 class="card-title text-center">Pengobatan</h5>
                        <p class="card-text text-center">{{ $penyakit->pengobatan }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection

