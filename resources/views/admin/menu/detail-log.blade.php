@extends('layouts.template-pakar')

@section('contents-pakar')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}">Beranda</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{route('admin.log-konsultasi')}}">Hasil Diagnosa</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">Detail</a>
            </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn button-edit" onclick="window.history.back()"> Kembali</button>
                        </div>
                        <h4 class="card-title">Hasil Diagnosa</h4>
                        <div class="alert alert-success">Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
                        <table class="table table-striped">
                           <tr>
                               <th width="150px">Nama</th>
                               <th width="30px">:</th>
                               <th>{{$balita->nama_lengkap}}</th>
                           </tr>
                           <tr>
                                <th>Jenis Kelamin</th>
                                <th>:</th>
                                <th>{{$balita->jenis_kelamin}}</th>
                            </tr>
                            <tr>
                                <th>Umur </th>
                                <th>:</th>
                                <th>{{$balita->umur}} Bulan</th>
                            </tr>

                            <tr>
                                <th>Nama Penyakit</th>
                                <th>:</th>
                                <th> {{$penyakit->nama_penyakit}}</th>
                            </tr>
                            <tr>
                                <th>Persentase Penyakit</th>
                                <th>:</th>
                                <th> {{$data->persen}} %            <a class="btn-sm button-tambah" href="{{route('admin.rumus', $data->id)}}">Rumus</a></th>
                            </tr>
                            <tr>
                                <th>Tipe Diagnosa Berdasarkan</th>
                                <th>:</th>
                                <th> {{$data->jenis}}</th>
                            </tr>
                       </table>
                       <hr>
                       <h4><b>Keterangan : </b></h4>
                    </br>
                       <h6><b>Gejala Yang Biasanya Terjadi pada Penyakit {{$penyakit->nama_penyakit}} : </b></h6>
                       <p>
                           <div class="bootstrap-label">
                               @foreach ($gejala as $item)
                                  <span class="label label-pink"> {{$item->gejala->gejala}}</span>
                               @endforeach
                              </div>

                       </p>
                       <h6><b>Deskripsi : </b></h6>
                        <p> <textarea readonly cols="150" rows="3">{{$penyakit->deskripsi}}</textarea></p>

                        <h6><b>Pengobatan : </b></h6>
                        <p>
                            <textarea readonly cols="150" rows="3">  {{$penyakit->pengobatan}}</textarea>
                        </p>
                        <h6><b>Penyebab : </b></h6>
                        <p>
                            <textarea readonly cols="150" rows="3">  {{$penyakit->penyebab}}</textarea>
                        </p>
                        <h6><b>Pencegahan : </b></h6>
                        <p>
                            <textarea readonly cols="150" rows="3">  {{$penyakit->pencegahan}}</textarea>
                        </p>

                        <div class="col-md-12 text-right">
                            <a href="{{route('export', ['balita' => $balita, 'penyakit' => $penyakit, 'diagnosa' => $data])}}"> <button type="submit" class="btn button-hapus">Cetak</button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection

