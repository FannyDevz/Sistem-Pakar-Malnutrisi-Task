@extends('layouts.template-user')

@section('contents-user')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{route('user.home')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{route('user.log-konsultasi')}}">Hasil Diagnosa</a>
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

                        <h4 class="card-title">Hasil Diagnosa</h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>Nama Balita</th>
                                        <th>Penyakit</th>
                                        <th>Tanggal Diagnosa</th>
                                        <th>Aksi</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->balita->nama_lengkap}}</td>
                                        <td class="text-center">{{$item->penyakit->nama_penyakit}}</td>
                                        <td class="text-center">{{date('d/m/Y',strtotime($item->tanggal_konsultasi))}}</td>
                                        <td class="text-center">
                                            <div class="btn-group" discount="group">
                                                <a href="{{route('user.log-konsultasi.detail', $item->id)}}" class="span6 btn btn-small button-tambah btn-sm" title="Detail"> <i class='pe-7s-pen'></i>Detail</a>

                                            </div>
                                        </td>

                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="12" class="text-center"><i>Belum ada data.</i></td>
                                    </tr>
                                    @endforelse

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
