@extends('layouts.template')

@section('contents')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home-utama')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('info-penyakit')}}">Info Penyakit</a>
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
                        <h4 class="card-title">Daftar Penyakit</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead class="text-center">
                                    <tr>
                                        <th class="col-sm-2">No</th>
                                        <th class="col-sm-2">Nama Penyakit</th>
                                        <th class="col-sm-8">Deskripsi</th>
                                        <!--
                                        <th>Pencegahan</th>
                                        <th>Penyebab</th>
                                        <th>Pengobatan</th>
                                        -->

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">{{$item->nama_penyakit}}</td>
                                        <td>{{$item->deskripsi}}</td>
                                        <!--
                                        <td>{{$item->pencegahan}}</td>
                                        <td>{{$item->penyebab}}</td>
                                        <td>{{$item->pengobatan}}</td>
                                        -->
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
