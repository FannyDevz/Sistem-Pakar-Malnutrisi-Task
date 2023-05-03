<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Diagnosa;
use App\User;
use App\Models\Relasi;

class HomeController extends Controller
{

public function index()
{
    // Menghitung jumlah data pada tabel Penyakit
    $totalPenyakit = Penyakit::count();

    // Menghitung jumlah data pada tabel Gejala
    $totalGejala = Gejala::count();

    // Menghitung jumlah data pada tabel User dengan kondisi level = 'user'
$totalUser = User::where('level', '=', 'user')->count();


    // Menghitung jumlah data pada tabel Relasi
    $totalRelasi = Relasi::count();

    // Menghitung jumlah data pada tabel Relasi
    $totalDiagnosa = Diagnosa::count();

    return view('admin.home', [
        'totalPenyakit' => $totalPenyakit,
        'totalGejala' => $totalGejala,
        'totalUser' => $totalUser,
        'totalRelasi' => $totalRelasi,
        'totalDiagnosa' => $totalDiagnosa
    ]);
}
}
