@extends('layouts.template')

@section('contents')
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('home-utama')}}">Beranda</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="{{route('kontak')}}">Kontak</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kontak Pakar</h4>
                        <div class="basic-form">
<!--

                         <div class="table-responsive">
                            <table id="table-diagnosa" class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>Nama</th>
                                        <th>Profesi</th>
                                        <th>Tempat Praktek</th>
                                        <th>No. HP</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Dr. Safitri</td>
                                        <td>Dokter Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>085789892218</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Tusi Anggraini, Amd.Keb</td>
                                        <td>Bidan Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>0895610009920</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Meyta EKa F., Amd.Keb</td>
                                        <td>Bidan Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>082281995338</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Resmasari. Amd.Keb</td>
                                        <td>Bidan Praktek</td>
                                        <td>Puskesmas Kemalo Abung</td>
                                        <td>085960291469</td>
                                    </tr>


                                </tbody>
                                <tfoot class="text-center">
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>Nama</th>
                                        <th>Profesi</th>
                                        <th>Tempat Praktek</th>
                                        <th>No. HP</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection
