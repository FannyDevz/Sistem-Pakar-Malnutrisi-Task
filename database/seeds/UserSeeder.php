<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

                'id'        => '1',
                'username'  => 'admin',
                'name'      => 'admin',
                'email'     => 'admin'.'@gmail.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password'  => Hash::make('admin'),
                'remember_token'  => 'admin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
