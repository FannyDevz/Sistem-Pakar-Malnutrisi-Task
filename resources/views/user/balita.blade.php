@extends('layouts.template-user')

@section('contents-user')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb"><li class="breadcrumb-item">
                <a href="{{route('user.home')}}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="#">Balita</a>
            </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-body">

                        <div  class="alert alert-success">

                            <h4 class="card-title">Data Balita</h4>
                            <table class="table table-striped">

                               <tr>
                                   <th width="150px">Nama</th>
                                   <th width="30px">:</th>
                                   <th>{{$data->nama_lengkap}}</th>
                               </tr>
                               <tr>
                                    <th>Jenis Kelamin</th>
                                    <th>:</th>
                                    <th>{{$data->jenis_kelamin}}</th>
                                </tr>
                                <tr>
                                    <th>Umur </th>
                                    <th>:</th>
                                    <th>{{$data->umur}} tahun</th>
                                </tr>

                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <th>:</th>
                                    <th> {{$data->ttl}}</th>
                                </tr>
                           </table>
                           <div class="col-md-12 text-right">
                            <a href="{{route('user.balitaedit', $data->id)}}" class="btn btn-large btn-outline-pink btn-lg" title="Edit Data"> <i class='pe-7s-pen'></i> Ubah</a> </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection
