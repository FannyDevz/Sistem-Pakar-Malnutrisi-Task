<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Diagnosa;
use App\User;
use App\Models\Relasi;
use Illuminate\Support\Facades\DB;

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

        // Mengambil data diagnosa berdasarkan bulan
        $data = Diagnosa::select(
            DB::raw('MONTH(tanggal_konsultasi) as month'),
            DB::raw('COUNT(*) as count')
        )
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->get();

        // Array untuk menyimpan jumlah diagnosa per bulan
        $bulanIndonesia = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        $counts = [];

        // Inisialisasi array jumlah diagnosa dengan nilai awal 0
        for ($i = 1; $i <= 12; $i++) {
            $counts[$i] = 0;
        }

        // Memasukkan jumlah diagnosa ke dalam array bulan yang sesuai
        foreach ($data as $item) {
            $month = $item->month;
            $counts[$month] = $item->count;
        }

        // Mengambil data diagnosa berdasarkan bulan dan penyakit
        $diagnosaData = Diagnosa::selectRaw('MONTH(tanggal_konsultasi) as bulan, kd_penyakit, COUNT(*) as jumlah')
            ->groupBy('bulan', 'kd_penyakit')
            ->get();

        $penyakitData = Penyakit::pluck('nama_penyakit', 'kd_penyakit')->all();

        return view('admin.home', [
            'totalPenyakit' => $totalPenyakit,
            'totalGejala' => $totalGejala,
            'totalUser' => $totalUser,
            'totalRelasi' => $totalRelasi,
            'totalDiagnosa' => $totalDiagnosa,
            'bulanIndonesia' => $bulanIndonesia,
            'counts' => $counts,
            'diagnosaData' => $diagnosaData,
            'penyakitData' => $penyakitData,
        ]);
    }
}
