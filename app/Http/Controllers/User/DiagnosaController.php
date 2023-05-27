<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Relasi;
use App\Models\Balita;
use App\User;
use App\Models\Diagnosa;
use Validator;
use Illuminate\Support\Facades\DB;

use Auth;
use Ramsey\Uuid\Uuid;
use PDF;

class DiagnosaController extends Controller
{

    public function index()
    {
        $user    = auth()->user();
        $data   = Balita::where('user_id', $user->id)->first();

        if (!$data) {
        return redirect()->route('user.register')->with('warning', 'Lengkapi Data Balita Terlebih Dahulu');
    }

        $gejala = Relasi::select('kd_gejala')
        ->distinct()
        ->with('gejala')
        ->orderBy('kd_gejala', 'ASC')
        ->get();

        return view('konsultasi.pertanyaan', compact('gejala'));
    }

    public function indexbc()
    {
        $user    = auth()->user();
        $data   = Balita::where('user_id', $user->id)->first();

        if (!$data) {
        return redirect()->route('user.register')->with('warning', 'Lengkapi Data Balita Terlebih Dahulu');
    }

        $penyakit = Relasi::select('kd_penyakit')
        ->distinct()
        ->with('penyakit')
        ->orderBy('kd_penyakit', 'ASC')
        ->get();

        return view('konsultasi.pertanyaanbc', compact('penyakit'));
    }


    public function diagnosabc(request $request)
    {
        if($request->penyakit == null){
            return redirect()->route('diagnosabc.list')->with('warning', 'Anda Belum menentukan penyakit, silahkan pilih penyakit');
        }

        $penyakit = $request->penyakit;
        $gejala = Relasi::with('gejala')
        ->where('kd_penyakit',$request->penyakit)
        ->orderBy('kd_gejala', 'ASC')
        ->get();

        return view('konsultasi.pertanyaanbcvl', compact('gejala','penyakit'));
    }


    public function diagnosaakhir (request $request)
    {
        if($request->gejala == null){
            return redirect()->route('diagnosabc')->with('warning', 'Anda Belum menentukan gejala, silahkan pilih gejala');
        }
        $hasil = $this->knowlage2($request->gejala, $request->penyakit);


        $penyakit = Penyakit::where('kd_penyakit', $hasil['kode_penyakit'])->first();
        $gejala   = Relasi::with('gejala')->where('kd_penyakit',$penyakit->kd_penyakit )->get();
        $user     = auth()->user();
        $balita   = Balita::where('user_id', $user->id)->first();

        $konsultasi = new Diagnosa;

        $konsultasi->id                 = Uuid::uuid4() -> getHex();
        $konsultasi->balita_id          = $balita->id;
        $konsultasi->kd_penyakit        = $penyakit->kd_penyakit;
        $konsultasi->tanggal_konsultasi = date('Y-m-d H:i:s');
        $konsultasi->jenis              = 'penyakit';
        $konsultasi->persen             = $hasil['persentase'];
        $konsultasi->save();


        $diagnosa    = Diagnosa::where('id', $konsultasi->id )->first();

        return view('konsultasi.hasil-diagnosa', compact('gejala','penyakit','balita','diagnosa'));
    }


    public function diagnosa(request $request)
    {
        if($request->gejala == null){
            return redirect()->route('diagnosa.list')->with('warning', 'Anda Belum menentukan gejala, silahkan pilih gejala');
        }

        $hasil = $this->knowlage($request->gejala);

        $penyakit = Penyakit::where('kd_penyakit', $hasil['kode_penyakit'])->first();
        $gejala   = Relasi::with('gejala')->where('kd_penyakit', $penyakit->kd_penyakit)->get();
        $user     = auth()->user();
        $balita   = Balita::where('user_id', $user->id)->first();

        $konsultasi = new Diagnosa;

        $konsultasi->id                 = Uuid::uuid4() -> getHex();
        $konsultasi->balita_id          = $balita->id;
        $konsultasi->kd_penyakit        = $penyakit->kd_penyakit;
        $konsultasi->tanggal_konsultasi = date('Y-m-d H:i:s');
        $konsultasi->jenis              = 'gejala';
        $konsultasi->persen             = $hasil['persentase'];
        $konsultasi->save();


        $diagnosa    = Diagnosa::where('id', $konsultasi->id )->first();

        return view('konsultasi.hasil-diagnosa', compact('gejala','penyakit','balita','diagnosa'));
    }

    function knowlage($gejala)
    {
        $roles = [];

        // Ambil data gejala dari database
        $relasiGejala = Relasi::whereIn('kd_gejala', $gejala)->get();

        foreach ($relasiGejala as $relasi) {
            $kd_penyakit = $relasi->kd_penyakit;

            if (!isset($roles[$kd_penyakit])) {
                $roles[$kd_penyakit] = 0;
            }

            $roles[$kd_penyakit]++;
        }

        // Mencari penyakit dengan jumlah gejala tertinggi (kemungkinan penyakit paling tinggi)
        $kd_penyakitTertinggi = null;
        $jumlahGejalaTertinggi = 0;

        foreach ($roles as $kd_penyakit => $jumlah) {
            // Menghitung jumlah gejala penyakit dari tabel relasi
            $jumlahGejalaPenyakit = Relasi::where('kd_penyakit', $kd_penyakit)->count();

            if ($jumlah > $jumlahGejalaTertinggi) {
                $kd_penyakitTertinggi = $kd_penyakit;
                $jumlahGejalaTertinggi = $jumlah;

                // Update jumlah gejala penyakit tertinggi
                $jumlahGejalaPenyakitTertinggi = $jumlahGejalaPenyakit;
            }
        }

        // Menghitung persentase
        $persentase = ($jumlahGejalaTertinggi / $jumlahGejalaPenyakitTertinggi) * 100;

        // Menyimpan data dalam variabel
        $hasil = [
            'kode_penyakit' => $kd_penyakitTertinggi,
            'persentase' => $persentase
        ];

        return $hasil;
    }



    function knowlage2($gejala, $penyakit)
    {
        $jumlahP = 0;
        $jumlahGejalaPenyakit = Relasi::where('kd_penyakit', $penyakit)->count();

        for ($i = 0; $i < count($gejala); $i++) {
            // Menghitung jumlah gejala berdasarkan penyakit yang dipilih
            if (Relasi::where('kd_gejala', $gejala[$i])->where('kd_penyakit', $penyakit)->exists()) {
                $jumlahP++;
            }
        }

        // Menghitung persentase
        $persentase = ($jumlahP / $jumlahGejalaPenyakit) * 100;

        // Menyimpan data dalam variabel
        $hasil = [
            'kode_penyakit' => $penyakit,
            'persentase' => $persentase
        ];

        return $hasil;
    }


    public function export($balita, $penyakit, $diagnosa)
    {

        $data['penyakit'] = Penyakit::where('id', $penyakit)->first();
        $data['gejala']   = Relasi::with('gejala')->where('kd_penyakit', $data['penyakit']->kd_penyakit)->get();
        $data['balita']   = Balita::where('id', $balita)->first();
        $data['diagnosa'] = Diagnosa::where('id', $diagnosa)->first();


        // return $data;

        $pdf = PDF::loadView('konsultasi.export', $data)
        ->setPaper('a4','potret')->setWarnings(false)
        ->setOptions(['dpi' => 150,  'isRemoteEnabled' => false]);

        return $pdf->download('hasil-diagnosa.pdf');

    }

}
