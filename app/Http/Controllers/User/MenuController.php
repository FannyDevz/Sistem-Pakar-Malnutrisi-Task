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

    public function logKonsultasiUser()
    {
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

        return view('user.detail-log', compact('gejala','penyakit','balita'));
    }

    public function informasi()
    {
        return view('admin.menu.informasi');

    }


    public function resetPassword()
    {
        return view('user.reset-password');
    }

    public function updatePassword(request $request)
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
