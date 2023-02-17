@extends('layouts.template-pakar')

@section('contents-pakar')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{route('admin.gejala')}}">Gejala</a></li>
                <li class="breadcrumb-item active"><a href="#">Index</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Daftar Gejala</h3>
                            <a href="{{route('admin.gejala.create')}}"><button type="button" class="btn mb-1 btn-outline-pink">Tambah</button></a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead class="text-center">
                                    <tr>
                                        <th  width="30px">No.</th>
                                        <th>Kode Gejala</th>
                                        <th>Gejala</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">{{$item->kd_gejala}}</td>
                                        <td>{{$item->gejala}}</td>
                                        <!--<td class="text-center">{{$item->nilai}}</td>-->

                                        <td class="text-center">
                                            <div class="btn-group" discount="group">
                                                <a href="{{route('admin.gejala.edit', $item->id)}}" class="span6 btn btn-small btn-outline-pink btn-sm" title="Edit Data"> <i class='pe-7s-pen'></i> Ubah</a>
                                                <a href="{{route('admin.gejala.destroy', $item->id)}}" class="span6 btn btn-small btn-outline-pink btn-sm" title="Edit Data"  onclick="return confirm('Hapus data?');"> <i class='pe-7s-trash'></i> Hapus</a>
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
