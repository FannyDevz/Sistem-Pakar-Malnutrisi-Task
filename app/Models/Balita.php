<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Balita extends Model
{
    use SoftDeletes;

    public $incrementing = false;

    public $table = 'balita';

    protected $dates = ['created_at','updated_at','delete_at'];

    public $fillable =[
        'nama_lengkap',
        'user_id',
        'ttl',
        'jenis_kelamin',
        'umur'
    ];
}
