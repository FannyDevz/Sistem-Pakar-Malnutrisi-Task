<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Relasi;
use App\Models\Balita;
use App\User;
use Carbon\Carbon;
use Validator;
use Auth;
use Hash;

use PDF;


class MenuController extends Controller
{
    public function kelola()
    {
        return view('admin.menu.kelola');
    }

    public function logKonsultasi(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $data = Diagnosa::with('balita.user', 'penyakit')
            ->when($start_date, function($query, $start_date) {
                return $query->where('tanggal_konsultasi', '>=', $start_date);
            })
            ->when($end_date, function($query, $end_date) {
                $end_date = Carbon::parse($end_date)->addDays(1)->format('Y-m-d');
                return $query->where('tanggal_konsultasi', '<=', $end_date);
            })
            ->orderBy('created_at', 'DESC')
            ->get();

        // Membuat variabel untuk menampung apakah filter sudah dilakukan atau belum
        $is_filtered = false;

        if ($start_date && $end_date) {
            $is_filtered = true;
        }

        return view('admin.menu.log-konsultasi', compact('data', 'is_filtered', 'start_date', 'end_date'));
    }


    public function print(Request $request)
{
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');

    $data = Diagnosa::with('balita.user', 'penyakit')
        ->when($start_date, function($query, $start_date) {
            return $query->where('tanggal_konsultasi', '>=', $start_date);
        })
        ->when($end_date, function($query, $end_date) {
            return $query->where('tanggal_konsultasi', '<=', $end_date);
        })
        ->orderBy('created_at', 'DESC')
        ->get();

    // Membuat variabel untuk menampung apakah filter sudah dilakukan atau belum
    $is_filtered = false;

    if ($start_date && $end_date) {
        $is_filtered = true;
    }

    $pdf = PDF::loadView('admin.menu.log-konsultasi-print', compact('data'));
    return $pdf->download('log-konsultasi.pdf');

}


    public function detailLog($id)
    {
        $data     = Diagnosa::where('id', $id)->first();
        $penyakit = Penyakit::where('kd_penyakit', $data->kd_penyakit)->first();
        $gejala   = Relasi::with('gejala')->where('kd_penyakit', $data->kd_penyakit)->get();
        $balita   = Balita::where('id', $data->balita_id)->first();

        return view('admin.menu.detail-log', compact('gejala','penyakit','balita','data'));
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

        return view('admin.menu.detail-rumus', compact('gejala', 'penyakit', 'data', 'rumus'));
    }



    public function informasi()
    {
        return view('admin.menu.informasi');

    }


    public function resetPassword()
    {
        return view('admin.menu.reset-password');
    }

    public function updatePassword(request $request)
    {

        if (!Hash::check($request->password_old, Auth::user()->password)) {
            return redirect()->route('admin.menu.reset-password')->with('warning', 'Kata sandi lama tidak sesuai');
        }

        $input = $request->except('_token');

        $validation = Validator::make($input,[
            'password_old'             => 'required',
            'password'                 => 'required',
            'password_confirmation'    => 'same:password',
        ]);

        if ($validation->fails()) {

            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data = User::findOrFail(Auth::user()->id);
		$data->password           = Hash::make($request->password);

        $data->save();

        return redirect()->route('admin.reset-password')->with('success','Berhasil memperbaharui data');
    }

    public function resetPasswordUser()
    {
        return view('user.reset-password');
    }

    public function updatePasswordUser(request $request)
    {

        if (!Hash::check($request->password_old, Auth::user()->password)) {
            return redirect()->route('user.reset-password')->with('warning', 'Kata sandi lama tidak sesuai');
        }

        $input = $request->except('_token');

        $validation = Validator::make($input,[
            'password_old'             => 'required',
            'password'                 => 'required',
            'password_confirmation'    => 'same:password',
        ]);

        if ($validation->fails()) {

            $errors = $validation->errors();

            return redirect()->back()->with('warning',implode("\n", $errors->all()));
        }

        $data = User::findOrFail(Auth::user()->id);
		$data->password           = Hash::make($request->password);

        $data->save();

        return redirect()->route('user.reset-password')->with('success','Berhasil memperbaharui data');
    }

}
