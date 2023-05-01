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

        $data = Diagnosa::with('balita.user','penyakit')
            ->when($start_date, function($query, $start_date) {
                return $query->where('tanggal_konsultasi', '>=', $start_date);
            })
            ->when($end_date, function($query, $end_date) {
                $end_date = Carbon::parse($end_date)->addDays(1)->format('Y-m-d');
                return $query->where('tanggal_konsultasi', '<=', $end_date);
            })
            ->orderBy('created_at', 'DESC')
            ->get();

        if ($request->ajax()) {
            return view('admin.menu.log-konsultasi-data', compact('data'));
        }

        return view('admin.menu.log-konsultasi', compact('data'));
    }


    public function detailLog($id)
    {
        $data     = Diagnosa::where('id', $id)->first();
        $penyakit = Penyakit::where('kd_penyakit', $data->kd_penyakit)->first();
        $gejala   = Relasi::with('gejala')->where('kd_penyakit', $data->kd_penyakit)->get();
        $balita   = Balita::where('id', $data->balita_id)->first();

        return view('admin.menu.detail-log', compact('gejala','penyakit','balita','data'));
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
