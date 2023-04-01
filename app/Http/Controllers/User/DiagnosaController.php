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

use Auth;
use Ramsey\Uuid\Uuid;
use PDF;

class DiagnosaController extends Controller
{

    public function index()
    {
        $gejala = Relasi::select('kd_gejala')
        ->distinct()
        ->with('gejala')
        ->orderBy('kd_gejala', 'ASC')
        ->get();

        return view('konsultasi.pertanyaan', compact('gejala'));
    }

    public function indexbc()
    {
        $penyakit = Relasi::select('kd_penyakit')
        ->distinct()
        ->with('penyakit')
        ->orderBy('kd_penyakit', 'ASC')
        ->get();

        return view('konsultasi.pertanyaanbc', compact('penyakit'));
    }

    public function indexbcvl($penyakit)
    {

        $gejala = Relasi::select('kd_gejala')
        ->distinct()
        ->with('gejala')
        ->where('kd_penyakit', $penyakit)
        ->orderBy('kd_gejala', 'ASC')
        ->get();

        return view('konsultasi.pertanyaanbcvl', compact('gejala'));
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
        $role['P01'] = 0;
        $role['P02'] = 0;
        $role['P03'] = 0;
        $role['P04'] = 0;
        $role['P05'] = 0;
        $role['P06'] = 0;
        $role['P07'] = 0;
        $jumlahP01 = 0;
        $jumlahP02 = 0;
        $jumlahP03 = 0;
        $jumlahP04 = 0;
        $jumlahP05 = 0;
        $jumlahP06 = 0;
        $jumlahP07 = 0;

        for($i=0;$i<count($gejala); $i++) {

            //role 1 (P01)
            if($gejala[$i] == 'G01' || $gejala[$i] == 'G02'
            || $gejala[$i] == 'G03' || $gejala[$i] == 'G04'
            || $gejala[$i] == 'G05'  || $gejala[$i] == 'G06'
            || $gejala[$i] == 'G07' || $gejala[$i] == 'G08'){

                $jumlahP01++;
                $persentaseP01 = ($jumlahP01 / 8) * 100;
                $role['P01'] = $role['P01'] + 1;

            }


            //role 2 (P02)
            if($gejala[$i] == 'G01' || $gejala[$i] == 'G09'
            || $gejala[$i] == 'G10' || $gejala[$i] == 'G11'
            || $gejala[$i] == 'G12' || $gejala[$i] == 'G13'){

                $jumlahP02++;
                $persentaseP02 = ($jumlahP02 / 6) * 100;
                $role['P02'] = $role['P02'] + 1;

            }

            //role 3 (P03)
            if($gejala[$i] == 'G01' || $gejala[$i] == 'G07'
            || $gejala[$i] == 'G08' || $gejala[$i] == 'G09'
            || $gejala[$i] == 'G11' || $gejala[$i] == 'G14'
            || $gejala[$i] == 'G15' || $gejala[$i] == 'G16'  ){

                $jumlahP03++;
                $persentaseP03 = ($jumlahP03 / 8) * 100;
                $role['P03'] = $role['P03'] + 1;
            }

            //role 4 (P04)
            if($gejala[$i] == 'G17' || $gejala[$i] == 'G18'
            || $gejala[$i] == 'G19' || $gejala[$i] == 'G20'
            || $gejala[$i] == 'G21' || $gejala[$i] == 'G22' ){

                $jumlahP04++;
                $persentaseP04 = ($jumlahP04 / 6) * 100;
                $role['P04'] = $role['P04'] + 1;

            }

            //role 5 (P05)
            if($gejala[$i] == 'G23' || $gejala[$i] == 'G24'
            || $gejala[$i] == 'G25' || $gejala[$i] == 'G26'
            || $gejala[$i] == 'G27' || $gejala[$i] == 'G28'
            || $gejala[$i] == 'G29' || $gejala[$i] == 'G30'
            || $gejala[$i] == 'G31' || $gejala[$i] == 'G32'
            || $gejala[$i] == 'G33' || $gejala[$i] == 'G34'
            || $gejala[$i] == 'G35' || $gejala[$i] == 'G36'){

                $jumlahP05++;
                $persentaseP05 = ($jumlahP05 / 14) * 100;
                $role['P05'] = $role['P05'] + 1;

            }

            //role 6 (P06)
            if($gejala[$i] == 'G06' || $gejala[$i] == 'G27'
            || $gejala[$i] == 'G28' || $gejala[$i] == 'G37'
            || $gejala[$i] == 'G38' || $gejala[$i] == 'G39'
            || $gejala[$i] == 'G40' || $gejala[$i] == 'G41'){

                $jumlahP06++;
                $persentaseP06 = ($jumlahP06 / 8) * 100;
                $role['P06'] = $role['P06'] + 1;

            }


            //role 7 (P07)
            if($gejala[$i] == 'G12' || $gejala[$i] == 'G24'
            || $gejala[$i] == 'G25' || $gejala[$i] == 'G26'
            || $gejala[$i] == 'G27' || $gejala[$i] == 'G39'
            || $gejala[$i] == 'G42' || $gejala[$i] == 'G43'
            || $gejala[$i] == 'G44' || $gejala[$i] == 'G45'
            || $gejala[$i] == 'G46' || $gejala[$i] == 'G47'
            || $gejala[$i] == 'G48' || $gejala[$i] == 'G49'
            || $gejala[$i] == 'G50' ){

                $jumlahP07++;
                $persentaseP07 = ($jumlahP07 / 15) * 100;
                $role['P07'] = $role['P07'] + 1;

            }

        }

         // mencari kode penyakit tertinggi
    arsort($role);
    $highestKey = key($role);

    // menyimpan persentase dari kode penyakit tertinggi
    $persentase = 0;
    if ($highestKey == 'P01') {
        $persentase = $persentaseP01;
    } elseif ($highestKey == 'P02') {
        $persentase = $persentaseP02;
    } elseif ($highestKey == 'P03') {
        $persentase = $persentaseP03;
    }elseif ($highestKey == 'P04') {
        $persentase = $persentaseP04;
    }elseif ($highestKey == 'P05') {
        $persentase = $persentaseP05;
    }elseif ($highestKey == 'P06') {
        $persentase = $persentaseP06;
    }elseif ($highestKey == 'P07') {
        $persentase = $persentaseP07;
    }

    // menyimpan kedua data dalam variabel
    $hasil['kode_penyakit'] = $highestKey;
    $hasil['persentase'] = $persentase;

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
