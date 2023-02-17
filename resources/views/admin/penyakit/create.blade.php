@extends('layouts.template-pakar')

@section('contents-pakar')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.penyakit')}}">Penyakit</a></li>
                <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Penyakit</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="{{route('admin.penyakit.store')}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Kode Penyakit<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"  value="{{$kode}}" name="kd_penyakit"  readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Nama Penyakit<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"   name="nama_penyakit"  placeholder="Masukan Nama Penyakit">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Deskripsi<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea name="deskripsi" class="form-control" cols="30" rows="5" placeholder="Masukan Deskripsi Penyakit"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Pencegahan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                         <textarea name="pencegahan" class="form-control  " cols="30" rows="10" placeholder="Masukkan Pencegahan"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Penyebab<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                         <textarea name="penyebab" class="form-control  " cols="30" rows="10" placeholder="Masukkan Penyebab"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Pengobatan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                         <textarea name="pengobatan" class="form-control  " cols="30" rows="10" placeholder="Masukkan Pengobatan"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-outline-pink">Simpan</button>
                                        <button type="submit" class="btn btn-outline-pink" onclick="window.history.back()"> Kembali</button>
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
