@extends('layouts.template-pakar')

@section('contents-pakar')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Beranda</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.penyakit')}}">Penyakit</a></li>
                <li class="breadcrumb-item active"><a href="#">Edit</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Penyakit</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('admin.penyakit.update', $data->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Kode Penyakit<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  value="{{$data->kd_penyakit}}" name="kd_penyakit"  readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Nama Penyakit<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"   name="nama_penyakit" value="{{$data->nama_penyakit}}" placeholder="Masukan Nama Penyakit">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Deskripsi<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                    <textarea name="deskripsi" class="form-control" cols="30" rows="5" placeholder="Masukan Deskripsi Penyakit">{{$data->deskripsi}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Pencegahan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                    <textarea name="pencegahan" class="form-control" cols="30" rows="5" placeholder="Masukan Pencegahan">{{$data->pencegahan}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Penyebab<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                    <textarea name="penyebab" class="form-control" cols="30" rows="5" placeholder="Masukan Penyebab">{{$data->penyebab}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Pengobatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                    <textarea name="pengobatan" class="form-control" cols="30" rows="10" placeholder="Masukkan Pengobatan">{{$data->pengobatan}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Gambar</label>
                                    <div class="col-lg-6">
                                        @if ($data->gambar)
                                            <img src="{{ asset('images/' . $data->gambar) }}" alt="Gambar {{ $data->nama_penyakit }}" width="200px">
                                        @else
                                            <img src="{{ asset('images/no_image.png') }}" alt="No Image" width="200px">
                                        @endif
                                        <input type="file" name="gambar" class="form-control-file mt-3">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn button-tambah">Simpan</button>
                                        <a href="{{route('admin.penyakit')}}" class="btn button-edit">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
