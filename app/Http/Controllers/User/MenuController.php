<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Relasi;
use App\Models\Balita;
use App\User;
use Validator;
use Auth;
use Hash;


class MenuController extends Controller
{
    public function kelola()
    {
        return view('admin.menu.kelola');
    }
    public function infoPenyakit()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();

        return view('user.info-penyakit', compact('data'));
    }

    public function show($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        return view('user.penyakit-show', compact('penyakit'));
    }


    public function logKonsultasiUser()
    {

        $user    = auth()->user();
        $data   = Balita::where('user_id', $user->id)->first();

        if (!$data) {
        return redirect()->route('user.register')->with('warning', 'Lengkapi Data Balita Terlebih Dahulu');
    }
        $user      = auth()->user();
        $balita   = Balita::where('user_id', $user->id)->first();
        $data = Diagnosa::with('balita','penyakit')->where('balita_id', $balita->id)->orderBy('created_at', 'DESC')->get();

        return view('user.log-konsultasi',compact('data'));
    }

    public function detailLog($id)
    {
        $data     = Diagnosa::where('id', $id)->first();
        $penyakit = Penyakit::where('kd_penyakit', $data->kd_penyakit)->first();
        $gejala   = Relasi::with('gejala')->where('kd_penyakit', $data->kd_penyakit)->get();
        $balita   = Balita::where('id', $data->balita_id)->first();

        return view('user.detail-log', compact('gejala','penyakit','balita','data'));
    }

    public function rumus($id)
    {
        $data = Diagnosa::where('id', $id)->first();
        $penyakit = Penyakit::where('kd_penyakit', $data->kd_penyakit)->first();
        $gejala = Relasi::with('gejala')->where('kd_penyakit', $data->kd_penyakit)->get();

        // Menyiapkan rumus berdasarkan kondisi penyakit
        $rumus = '';
        if ($data->kd_penyakit == 'P01') {
            $rumus = "(Jumlah Gejala Sesuai / 8) * 100";
        } elseif ($data->kd_penyakit == 'P02') {
            $rumus = "(Jumlah Gejala Sesuai / 6) * 100";
        } elseif ($data->kd_penyakit == 'P03') {
            $rumus = "(Jumlah Gejala Sesuai / 8) * 100";
        } elseif ($data->kd_penyakit == 'P04') {
            $rumus = "(Jumlah Gejala Sesuai / 6) * 100";
        } elseif ($data->kd_penyakit == 'P05') {
            $rumus = "(Jumlah Gejala Sesuai / 14) * 100";
        } elseif ($data->kd_penyakit == 'P06') {
            $rumus = "(Jumlah Gejala Sesuai / 8) * 100";
        } elseif ($data->kd_penyakit == 'P07') {
            $rumus = "(Jumlah Gejala Sesuai / 15) * 100";
        }


        return view('user.detail-rumus', compact('gejala', 'penyakit', 'data', 'rumus'));
    }

    public function informasi()
    {
        return view('admin.menu.informasi');

    }
    public function DataUser()
    {

        $user      = auth()->user();
        $data   = User::where('id', $user->id)->first();
        return view('user.datauser',compact('data'));
    }

    public function DataUserUpdate(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username,' . $id,
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'jenis_kelamin' => 'required|string|max:20',
        'no_hp' => 'required|string|max:15',
        'alamat' => 'required|string|max:255',
    ]);

    $user = User::findOrFail($id);

    $user->name = $request->name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->jenis_kelamin = $request->jenis_kelamin;
    $user->no_hp = $request->no_hp;
    $user->alamat = $request->alamat;

    // Cek apakah input password tidak kosong
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->route('user.data-user')->with('success', 'Data pengguna berhasil diperbarui.');
}

}
