@extends('layouts.template-user')

@section('contents-user')
<div class="content-body">


    <!-- row -->
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



    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center "><b>INFORMASI PENYAKIT</b></h3></br>
                        <div class="row">
                            @foreach($data as $p)
                                <div class="col-lg-3">
                                    <div class="card mb-4">
                                        <div class="card-body ">
                                            @if ($p->gambar)
                                            <img  src="{{asset('images/' . $p->gambar)}}" alt="Gambar {{ $p->nama_penyakit }}" width="200px"></br></br>
                                            @else

                                            <img  src="{{asset('images/no_image.png')}}" alt="Gambar {{ $p->nama_penyakit }}" width="200px"></br></br>
                                            @endif

                                            <h5 class="card-title text-center ">{{$p->nama_penyakit}}</h5>
                                            <p class="card-text text-center">{{Str::limit(strip_tags($p->deskripsi), 150)}}</p>
                                            <a href="{{route('user.show', ['id' => $p->id])}}" class=" btn button-tambah card-link">Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
