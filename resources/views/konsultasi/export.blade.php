{{-- <style type="text/css">
    .page-break {
        page-break-after: always;

    }

    .p {
        font-size: 9px;
    }
    </style>
<div class="container-fluid">
    <div class="row">
        <div class="col">


                    <img src="{{asset('template/images/baktihusada.jpeg')}}" width="150" height="80">
                    <h4 class="card-title">Hasil Diagnosa</h4>
                    <div class="alert alert-success">Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
                    <table>
                       <tr>
                           <th width="150px">Nama</th>
                           <th width="30px">:</th>
                           <th>{{$balita->nama_lengkap}}</th>
                       </tr>
                       <tr>
                            <th>Usia Kehamilan</th>
                            <th>:</th>
                            <th>{{$balita->usia_kehamilan}} Hari</th>
                        </tr>
                        <tr>
                            <th>Umur </th>
                            <th>:</th>
                            <th>{{$balita->umur}} tahun</th>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <th>:</th>
                            <th>{{$balita->alamat}}</th>
                        </tr>
                        <tr>
                            <th>Nama Penyakit</th>
                            <th>:</th>
                            <th> {{$penyakit->nama_penyakit}}</th>
                        </tr>
                   </table>
                   <hr>
                   <h5>Keterangan : </h5>

                   <h6>Deskripsi : </h6>
                    <p>{{$penyakit->deskripsi}}</p>

                    <h6>Gejala : </h6>
                    <p>
                        <div >
                            @foreach ($gejala as $item)

                             {{$item->gejala->gejala}}
                            @endforeach
                           </div>

                    </p>

                    <h6>Pengobatan/Solusi : </h6>
                    <p>
                          {{$penyakit->solusi}}

                    </p>

                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Diagnosa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th,
        p{
			font-size: 9pt;
		}
    </style>

    <center>
		<h4>Hasil Diagnosa Penyakit Ibu Hamil</h4>
    </center>

    <div>Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
    <table class='table table-bordered'>
        <tr >
            <th >Nama</th>
            <th >:</th>
            <th>{{$balita->nama_lengkap}}</th>
        </tr>
        <tr>
             <th>Usia Kehamilan</th>
             <th>:</th>
             <th>{{$balita->usia_kehamilan}} Hari</th>
         </tr>
         <tr>
             <th>Umur </th>
             <th>:</th>
             <th>{{$balita->umur}} tahun</th>
         </tr>
         <tr>
             <th>Alamat</th>
             <th>:</th>
             <th>{{$balita->alamat}}</th>
         </tr>
         <tr>
             <th>Nama Penyakit</th>
             <th>:</th>
             <th> {{$penyakit->nama_penyakit}}</th>
         </tr>
    </table>


    <h5>Keterangan : </h5>

    <h6>Deskripsi : </h6>
     <p>{{$penyakit->deskripsi}}</p>

     <h6>Gejala : </h6>
     <p>
         <div >
             @foreach ($gejala as $item)

              {{$item->gejala->gejala}}
             @endforeach
            </div>

     </p>

     <h6>Pengobatan/Solusi : </h6>
     <p>
        <textarea  cols="150" rows="100">  {{$penyakit->solusi}}</textarea>

     </p>

</body>
</html> --}}


<!DOCTYPE html>
<html >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Hasil Diagnosa</title>
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('template/plugins/highlightjs/styles/darkula.css')}}">
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('template/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <style type="text/css">
      body{
          background-color: white;
      }

      table tr td,
		table tr th,
        p, span, textarea{
			font-size: 7pt;
		}


        @page {
            margin: 0;
        }
        * { padding: 5px; margin: 0; }
        @font-face {
            font-family: "source_sans_proregular";
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;


        }
       body{
            font-family: "source_sans_proregular", Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;

        }



  </style>
</head>
<body>



    <center>
        <!--<img src="{{public_path('template/images/logo-rs.jpeg')}}" width="61" height="42">-->
    </br></br><h1>

            Sistem Pakar Diagnosa Malnutrisi Pada Balita
            </h1></br>
        <h2>Laporan Diagnosa</h2></br>
    </center>


    <div class="container-fluid">
        <hr>
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                       <h3 >Hasil Diagnosa</h3>
                        <div class="alert alert-success">Berdasarkan diagnosa yang dikumpulkan bahwa sistem meyimpulkan:</div>
                        <table class="table table-striped">
                           <tr>
                               <th style="text-align: left;" width="140px">Nama</th>
                               <th width="30px">:</th>
                               <th style="text-align: left;">{{$balita->nama_lengkap}}</th>
                           </tr>
                           <tr>
                                <th style="text-align: left;">Jenis Kelamin</th>
                                <th>:</th>
                                <th style="text-align: left;">{{$balita->jenis_kelamin}}</th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Umur </th>
                                <th>:</th>
                                <th style="text-align: left;">{{$balita->umur}} Bulan</th>
                            </tr>

                            <tr>
                                <th style="text-align: left;">Nama Penyakit</th>
                                <th>:</th>
                                <th style="text-align: left;"> {{$penyakit->nama_penyakit}}</th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Persentase Penyakit</th>
                                <th>:</th>
                                <th style="text-align: left;"> {{$diagnosa->persen}} %</th>
                            </tr>
                            <tr>
                                <th style="text-align: left;">Tipe Diagnosa Berdasarkan</th>
                                <th>:</th>
                                <th style="text-align: left;"> {{$diagnosa->jenis}}</th>
                            </tr>
                       </table>

                    <h5 style="font-style: sans-serif">Keterangan : </h5>


                <div class="alert alert-success">
                <h6>Deskripsi : </h6>
                 <p>{{$penyakit->deskripsi}}</p>

                 <h6>Gejala Yang Biasanya Terjadi pada Penyakit {{$penyakit->nama_penyakit}} : </h6>
               <p>

                    @php
                    $i = 1;
                    @endphp
                     @foreach ($gejala as $item)
                      {{$i}}. {{$item->gejala->gejala}}<br>

                      @php
                          $i++;
                      @endphp
                     @endforeach


               </p>


              <h6>Pengobatan : </h6>
              <p>
                   {{$penyakit->pengobatan}}
              </p>
              <h6>Penyebab : </h6>
              <p>
            {{$penyakit->penyebab}}
              </p>
              <h6>Pencegahan : </h6>
              <p>
              {{$penyakit->pencegahan}}
              </p>

            </div>

                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- #/ container -->


</body>
</html>


