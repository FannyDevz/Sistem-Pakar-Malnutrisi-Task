<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Relasi;
use App\Models\Balita;
use App\Models\Diagnosa;
use Validator;
use Illuminate\Support\Facades\DB;
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




    public function diagnosa(request $request)
    {
        if($request->gejala == null){
            return redirect()->route('diagnosa.list')->with('warning', 'Anda Belum menentukan gejala, silahkan pilih gejala');
        }

        $diagnosa = $this->knowlage($request->gejala);
        $penyakit = Penyakit::where('kd_penyakit', $diagnosa)->first();
        $gejala   = Relasi::with('gejala')->where('kd_penyakit', $penyakit->kd_penyakit)->get();
        $pasien   = Pasien::where('id', session()->get('id'))->first();

        $konsultasi = new Diagnosa;
        $konsultasi->id                 = Uuid::uuid4() -> getHex();
        $konsultasi->pasien_id          = $pasien->id;
        $konsultasi->kd_penyakit        = $penyakit->kd_penyakit;
        $konsultasi->tanggal_konsultasi = date('Y-m-d H:i:s');
        $konsultasi->save();

        return view('konsultasi.hasil-diagnosa', compact('gejala','penyakit','pasien'));
    }

    function knowlage($gejala)
    {

          // Mendefinisikan array gejala yang dipilih
          $gejala = $gejala;

          // Mendefinisikan array role untuk setiap penyakit
          $role = [];

          // Mendapatkan daftar penyakit dari database
          $penyakit = Penyakit::all();

          // Looping untuk setiap penyakit
          foreach ($penyakit as $p) {
              // Mendefinisikan nilai awal role untuk penyakit tersebut
              $role[$p->kd_penyakit] = 0;

              // Mendapatkan daftar gejala dari database untuk penyakit tersebut
              $gejala_penyakit = Gejala::where('kd_penyakit', $p->kd_penyakit)->get();

              // Looping untuk setiap gejala penyakit
              foreach ($gejala_penyakit as $gp) {
                  // Jika gejala dipilih, maka increment nilai role untuk penyakit tersebut
                  if (in_array($gp->kd_gejala, $gejala)) {
                    $role[$p->kd_penyakit] += 1;
                  }
              }
          }

        $data = $role;
        asort($data);
        foreach($data as $x => $x_value) {
                $hasil = $x;
        }

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
