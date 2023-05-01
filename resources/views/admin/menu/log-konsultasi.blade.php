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

                        <form id="filter-form">
                            <div class="form-row">
                              <div class="col-md-4">
                                <label for="start_date">Tanggal Awal</label>
                                <input type="date" name="start_date" id="start_date" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <label for="end_date">Tanggal Akhir</label>
                                <input type="date" name="end_date" id="end_date" class="form-control">
                              </div>
                              <div class="col-md-4">
                                <label>&nbsp;</label>
                                <button type="submit" class="btn btn-primary btn-block">Filter</button>
                              </div>
                            </div>
                          </form>
                          <br>
                          @if($is_filtered)
                          <div class="row">
                              <div class="col-md-12 text-left">
                                  <a href="{{ route('admin.log-konsultasi.print', ['start_date' => $start_date, 'end_date' => $end_date]) }}" class="btn btn-danger" target="_blank">
                                      Cetak Log Konsultasi
                                  </a>
                              </div>
                          </div>
                      @else
                          <div class="row">
                              <div class="col-md-12 text-left">
                                  <a href="{{ route('admin.log-konsultasi.print') }}" class="btn btn-danger" target="_blank">
                                      Cetak Log Konsultasi
                                  </a>
                              </div>
                          </div>
                      @endif


                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr class="text-center">
                                        <th width="10px">No.</th>
                                        <th>User</th>
                                        <th>Nama Bayi</th>
                                        <th>Penyakit</th>
                                        <th>Tanggal Diagnosa</th>
                                        <th>Aksi</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td>{{$item->balita->user->name}}</td>
                                        <td>{{$item->balita->nama_lengkap}}</td>
                                        <td class="text-center">{{$item->penyakit->nama_penyakit}}</td>
                                        <td class="text-center">{{date('d/m/Y',strtotime($item->tanggal_konsultasi))}}</td>
                                        <td class="text-center">
                                            <style>
                                                button {
                                                    background-color: #000;
                                                    color: #fff;
                                                    border: none;
                                                    padding: 10px 20px;
                                                    border-radius: 5px;
                                                    font-size: 16px;
                                                    cursor: pointer;
                                                    transition: background-color 0.3s ease-in-out,
                                                    color 0.3s ease-in-out;
                                                }

                                                button:hover {
                                                    background-color: #fff;
                                                    color: #000;
                                                    outline: 2px solid #000;
                                                }
                                                </style>
                                            <div class="btn-group" discount="group">
                                                <a href="{{route('admin.log-konsultasi.detail', $item->id)}}" class="span6 btn button-tambah btn-small btn-sm" title="Detail"> <i class='pe-7s-pen'></i>Detail</a>

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
<script>
    $(document).ready(function() {
  // Ketika tombol submit di klik
  $('#filter-form').submit(function(e) {
    e.preventDefault();

    // Ambil nilai tanggal awal dan akhir
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();

    // Kirim data tanggal awal dan akhir ke server
    $.ajax({
      url: '{{ route("admin.log-konsultasi") }}',
      type: 'GET',
      data: {
        start_date: start_date,
        end_date: end_date
      },
      success: function(response) {
        // Perbarui isi tabel dengan data yang sudah difilter
        $('tbody').html(response);
      }
    });
  });
});


</script>

@endsection
