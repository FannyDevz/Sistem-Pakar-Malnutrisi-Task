<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gejala') -> insert([
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G01',
                'gejala'     => 'Sering rewel',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G02',
                'gejala'     => 'Rambut tipis, jarang dan mudah dicabut',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G03',
                'gejala'     => 'Adanaya bercak bercak pada kulit dan terkelupas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G04',
                'gejala'     => 'Terjadinya pembengkakan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G05',
                'gejala'     => 'Mata kelihata sayu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G06',
                'gejala'     => 'Diare',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G07',
                'gejala'     => 'Otot mengecil / tidak berkembang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G08',
                'gejala'     => 'Wajah tampak seperti orang tua',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G09',
                'gejala'     => 'Kulit kelihatan kering dan berkeriput',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G10',
                'gejala'     => 'Berkurangnya jumlah lemak dalam tubuh',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G11',
                'gejala'     => 'Badan sangat kurus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G12',
                'gejala'     => 'Rentan mengalami penyakit infeksi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G13',
                'gejala'     => 'Perut cekung dan iga ngambang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G14',
                'gejala'     => 'Gangguan pada ginjal dan pankreas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G15',
                'gejala'     => 'Perut buncit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G16',
                'gejala'     => 'Gangguan pernafasan / infeksi saluran pernafasan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G17',
                'gejala'     => 'Gangguan tumbuh kembang, termasuk berat dan tinggi tidak bertambah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G18',
                'gejala'     => 'Tinggi dan berat badan lebih kecil dibandingkan dengan anak seusianya.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G19',
                'gejala'     => 'Tumbuh gigi terlambat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G20',
                'gejala'     => 'Sedikit melakukan eye contact',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G21',
                'gejala'     => 'Wajah lebih tampak muda dari usianya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G22',
                'gejala'     => 'Pendiam/kurang aktif',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G23',
                'gejala'     => 'Tungkai membengkak',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G24',
                'gejala'     => 'Jantung berdebar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G25',
                'gejala'     => 'Sesak napas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G26',
                'gejala'     => 'Tangan dan kaki kesemutan atau mati rasa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G27',
                'gejala'     => 'Tubuh terasa nyeri',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G28',
                'gejala'     => 'Mual dan muntah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G29',
                'gejala'     => 'Mata bergerak tak terkontrol',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G30',
                'gejala'     => 'Mata bergerak tak terkontrol',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G31',
                'gejala'     => 'Kesulitan berbicara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G32',
                'gejala'     => 'Kesulitan berjalan, bahkan lumpuh sindrom WernickeKorsakoff',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G33',
                'gejala'     => 'Kemampuan mengingat berkurang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G34',
                'gejala'     => 'Koordinasi otot-otot tubuh menurun',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G35',
                'gejala'     => 'Gangguan penglihatan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G36',
                'gejala'     => 'Halusinasi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G37',
                'gejala'     => 'Kulit mengalami ruam',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G38',
                'gejala'     => 'Perdarahan dan pembengkakan pada gusi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G39',
                'gejala'     => 'Kurangnya nafsu makan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G40',
                'gejala'     => 'Berat badan turun',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G41',
                'gejala'     => 'Demam',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G42',
                'gejala'     => 'Tubuh lemah dan lesu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G43',
                'gejala'     => 'Mudah kelelahan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G44',
                'gejala'     => 'Kuku rapuh',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G45',
                'gejala'     => 'Radang lidah (glositis)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G46',
                'gejala'     => 'Tangan dan kaki dingin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G47',
                'gejala'     => 'Pusing atau sakit kepala',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G48',
                'gejala'     => 'Sakit dada',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G49',
                'gejala'     => 'Insomnia',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G50',
                'gejala'     => 'Kulit Pucat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],


        ]);
    }
}
