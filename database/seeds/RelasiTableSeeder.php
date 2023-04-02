<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\DB;

class RelasiTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('relasi') -> insert([
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G01',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G02',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G03',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G04',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G05',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G06',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G07',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P01',
                'kd_gejala'     => 'G08',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P02',
                'kd_gejala'     => 'G01',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P02',
                'kd_gejala'     => 'G09',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P02',
                'kd_gejala'     => 'G10',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P02',
                'kd_gejala'     => 'G11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P02',
                'kd_gejala'     => 'G12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P02',
                'kd_gejala'     => 'G13',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G01',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],

            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G07',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G08',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G09',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G11',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G14',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G15',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P03',
                'kd_gejala'     => 'G16',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P04',
                'kd_gejala'     => 'G17',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P04',
                'kd_gejala'     => 'G18',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P04',
                'kd_gejala'     => 'G19',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P04',
                'kd_gejala'     => 'G20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P04',
                'kd_gejala'     => 'G21',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P04',
                'kd_gejala'     => 'G22',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G23',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G29',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G31',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G32',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G33',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G34',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G35',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P05',
                'kd_gejala'     => 'G36',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G06',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G28',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G37',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G38',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G40',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P06',
                'kd_gejala'     => 'G41',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G12',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G24',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G25',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G26',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G27',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G39',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G42',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G43',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G44',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G45',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G46',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G47',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G48',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G49',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_penyakit'  => 'P07',
                'kd_gejala'     => 'G50',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
                ]);
    }
}
