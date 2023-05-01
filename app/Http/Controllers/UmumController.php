<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyakit;
use Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;


class UmumController extends Controller
{
    public function home()
    {

        $penyakits = Penyakit::paginate(3);

        return view('umum.home', compact('penyakits'));
    }

    public function infoPenyakit()
    {
        $data = Penyakit::orderBy('kd_penyakit', 'ASC')->get();

        return view('umum.info-penyakit', compact('data'));
    }

    // public function konsultasi()
    // {
    //     return view('umum.konsultasi');
    // }
    public function show($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        return view('umum.show', compact('penyakit'));
    }


    public function registrasi()
    {
        return view('umum.register');
    }

    public function infoPetunjuk()
    {
        return view('umum.info-petunjuk');
    }

    public function kontak()
    {
        return view('umum.kontak');
    }

    public function loginAdmin()
    {
        return view('umum.login');
    }

    public function tentang()
    {
        return view('umum.tentang');
    }

}
