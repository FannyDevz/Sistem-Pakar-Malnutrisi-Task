<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('penyakit') -> insert([
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P01',
                'nama_penyakit' => 'Kwashiorkor',
                'deskripsi'     => null,
                'pencegahan'        => null,
                'penyebab'        => null,
                'pengobatan'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P02',
                'nama_penyakit' => 'Marasmus',
                'deskripsi'     => null,
                'pencegahan'        => null,
                'penyebab'        => null,
                'pengobatan'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P03',
                'nama_penyakit' => 'MaramusKwashiorkor',
                'deskripsi'     => null,
                'pencegahan'        => null,
                'penyebab'        => null,
                'pengobatan'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P04',
                'nama_penyakit' => 'Stunting',
                'deskripsi'     => null,
                'pencegahan'        => null,
                'penyebab'        => null,
                'pengobatan'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P05',
                'nama_penyakit' => 'Beri-beri',
                'deskripsi'     => null,
                'pencegahan'        => null,
                'penyebab'        => null,
                'pengobatan'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P06',
                'nama_penyakit' => 'Skorbut',
                'deskripsi'     => null,
                'pencegahan'        => null,
                'penyebab'        => null,
                'pengobatan'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P07',
                'nama_penyakit' => 'Anemia',
                'deskripsi'     => null,
                'pencegahan'        => null,
                'penyebab'        => null,
                'pengobatan'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],


        ]);
    }
}
