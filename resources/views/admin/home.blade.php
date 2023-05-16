@extends('layouts.template-pakar')

@section('contents-pakar')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.home')}}">Beranda</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- row -->


    <div class="container-fluid">
        <style>
            /* Style untuk card */
            .card {
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                padding: 20px;
                margin-bottom: 20px;
            }

            /* Style untuk card title */
            .card h3 {
                margin-top: 0;
                margin-bottom: 10px;
                font-size: 24px;
                font-weight: normal;
            }

            /* Style untuk total angka */
            .total {
                font-size: 36px;
                font-weight: bold;
                margin-bottom: 10px;
            }

            /* Style untuk container card */
            .card-container {
                display: flex;
                flex-wrap: wrap;
            }

            /* Style untuk card width */
            .card {
                flex-basis: calc(25% - 20px);
                margin-right: 20px;
            }

            /* Style untuk card terakhir */
            .card:last-child {
                margin-right: 0;
            }

            /* Style untuk background dan teks warna pada setiap card */
            #gejala-card {
                background-color: #2196f3;
                color: #fff;
            }

            #penyakit-card {
                background-color: #4caf50;
                color: #fff;
            }

            #user-card {
                background-color: #f44336;
                color: #fff;
            }

            #aturan-card {
                background-color: #ffeb3b;
                color: #fff;
            }

            /* Style untuk ikon pada masing-masing card */
            .card::before {
                font-family: "Font Awesome 5 Free";
                font-weight: 900;
                font-size: 48px;
                position: absolute;
                top: 20px;
                right: 20px;
                opacity: 0.2;
            }

            /* Style untuk ikon pada masing-masing card */
            #gejala-card::before {
                content: '\e4a8'; /* Icon untuk gejala */
            }

            #penyakit-card::before {
                content: '\f0c3'; /* Icon untuk penyakit */
            }

            #user-card::before {
                content: '\f007'; /* Icon untuk user */
            }

            #aturan-card::before {
                content: '\f05a'; /* Icon untuk aturan */
            }
        </style>

        <div class="card-container">
            <!-- Card 1 -->
            <div class="card" id="gejala-card">
                <h3><b>Jumlah Gejala</b></h3>
                <div class="total">{{ $totalGejala }}</div>
            </div>

            <!-- Card 2 -->
            <div class="card" id="penyakit-card">
                <h3><b>Jumlah Penyakit</b></h3>
                <div class="total">{{ $totalPenyakit }}</div>
            </div>

            <!-- Card 3 -->
            <div class="card" id="user-card">
                <h3><b>Jumlah User</b></h3>
                <div class="total">{{ $totalUser }}</div>
            </div>

            <!-- Card 4 -->
            <div class="card" id="aturan-card">
                <h3><b>Jumlah Konsultasi</b></h3>
                <div class="total">{{ $totalDiagnosa }}</div>
            </div>
        </div>
        <br>
        <br>

<div style="display: flex; justify-content: space-between;">


    <div style="width: 800px;">
        {{-- <h3 class="text-center">Grafik Diagnosa perbulan - Bar Chart</h3><br> --}}
        <canvas id="barChart2"></canvas>
    </div>
    <div style="width: 800px;">
        {{-- <h3 class="text-center">Grafik Diagnosa Penyakit perbulan - Line Chart</h3><br> --}}
        <canvas id="lineChart"></canvas>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var bulanIndonesia = {!! json_encode($bulanIndonesia) !!};
        var counts = {!! json_encode(array_values($counts)) !!};

        var ctxBar = document.getElementById('barChart2').getContext('2d');
        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: bulanIndonesia,
                datasets: [{
                    label: 'Jumlah Diagnosa',
                    data: counts,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    });
</script>

{{--
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var bulanIndonesia = {!! json_encode($bulanIndonesia) !!};
        var counts = {!! json_encode(array_values($counts)) !!};

        var ctxLine = document.getElementById('lineChart2').getContext('2d');
        var lineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: bulanIndonesia,
                datasets: [{
                    label: 'Jumlah Diagnosa',
                    data: counts,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var ctxBar = document.getElementById('barChart2').getContext('2d');
        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: bulanIndonesia,
                datasets: [{
                    label: 'Jumlah Diagnosa',
                    data: counts,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script> --}}

<br>
<br>

        {{-- <div style="display: flex; justify-content: space-between;"> --}}


            {{-- <div style="width: 800px;">
                <h3 class="text-center">Grafik Diagnosa Penyakit perbulan - Bar Chart</h3><br>

                <canvas id="barChart"></canvas>
            </div> --}}
            {{-- <div style="width: 800px;">
                <h3 class="text-center">Grafik Diagnosa perbulan - Line Chart</h3><br>

                <canvas id="lineChart2"></canvas>
            </div>

        </div> --}}

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var bulanIndonesia = {!! json_encode($bulanIndonesia) !!};
                var counts = {!! json_encode(array_values($counts)) !!};

                var ctx = document.getElementById('lineChart').getContext('2d');
                var lineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: bulanIndonesia,
                        datasets: [
                            @foreach ($penyakitData as $kd_penyakit => $nama_penyakit)
                                {
                                    label: '{{ $nama_penyakit }}',
                                    data: [
                                        @foreach ($bulanIndonesia as $index => $bulan)
                                            @php
                                                $jumlah = 0;
                                                foreach ($diagnosaData as $item) {
                                                    if ($item->kd_penyakit == $kd_penyakit && $item->bulan == ($index + 1)) {
                                                        $jumlah = $item->jumlah;
                                                        break;
                                                    }
                                                }
                                            @endphp
                                            {{ $jumlah }},
                                        @endforeach
                                    ],
                                    backgroundColor: 'rgba({{ rand(0, 255) }}, {{ rand(0, 255) }}, {{ rand(0, 255) }}, 0.5)',
                                    borderColor: 'rgba({{ rand(0, 255) }}, {{ rand(0, 255) }}, {{ rand(0, 255) }}, 1)',
                                    borderWidth: 2
                                },
                            @endforeach
                        ]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    precision: 0
                                }
                            }
                        }
                    }
                });
            });
        </script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var bulanIndonesia = {!! json_encode($bulanIndonesia) !!};
        var counts = {!! json_encode(array_values($counts)) !!};

        var ctx = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: bulanIndonesia,
                datasets: [
                    @foreach ($penyakitData as $kd_penyakit => $nama_penyakit)
                        {
                            label: '{{ $nama_penyakit }}',
                            data: [
                                @foreach ($bulanIndonesia as $index => $bulan)
                                    @php
                                        $jumlah = 0;
                                        foreach ($diagnosaData as $item) {
                                            if ($item->kd_penyakit == $kd_penyakit && $item->bulan == ($index + 1)) {
                                                $jumlah = $item->jumlah;
                                                break;
                                            }
                                        }
                                    @endphp
                                    {{ $jumlah }},
                                @endforeach
                            ],
                            backgroundColor: 'rgba({{ rand(0, 255) }}, {{ rand(0, 255) }}, {{ rand(0, 255) }}, 0.5)',
                            borderColor: 'rgba({{ rand(0, 255) }}, {{ rand(0, 255) }}, {{ rand(0, 255) }}, 1)',
                            borderWidth: 1
                        },
                    @endforeach
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    });
</script>




    </div>
</div>


@endsection
