<!DOCTYPE html>
<html>
<head>
    <title>Log Konsultasi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: center;
            padding: 8px;
            border: 1px solid black;
        }

        th {
            background-color: #dddddd;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Laporan Diagnosa</h1>

    <table>
        <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal Konsultasi</th>
            <th>Nama Balita</th>
            <th>Diagnosa</th>
{{--            <th>Nama Pengguna</th>--}}
            <th>Usia Balita</th>
            <th>Jenis Kelamin Balita</th>
            <th>Penyakit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->tanggal_konsultasi }}</td>
                <td>{{ $item->balita->nama_lengkap }}</td>
                <td>{{ $item->jenis }}</td>
{{--                <td>{{ $item->balita->user->name }}</td>--}}
                <td>{{ $item->balita->umur }} Bulan</td>
                <td>{{ $item->balita->jenis_kelamin }}</td>
                <td>{{ $item->penyakit->nama_penyakit}} <br> ({{ $item->persen}}%)</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
