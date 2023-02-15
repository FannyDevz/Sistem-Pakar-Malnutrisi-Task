<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    public $table = 'pasien';

    protected $dates = ['created_at','updated_at','delete_at'];

    public $fillable =[
        'nama_lengkap',
        'jenis_kelamin',
        'umur',
        'alamat',
        'no_hp'
    ];
}
