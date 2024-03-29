<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/penyakit/{id}', 'PenyakitController@show')->name('show');


Route::get('/', 'UmumController@home')->name('home-utama');
Route::get('/penyakit', 'UmumController@infoPenyakit')->name('info-penyakit');
Route::get('/info-petunjuk', 'UmumController@infoPetunjuk')->name('info-petunjuk');
Route::get('/kontak', 'UmumController@kontak')->name('kontak');
Route::get('/login', 'UmumController@loginAdmin')->name('login');
Route::get('/tentang-kami', 'UmumController@tentang')->name('tentang');

Route::get('/register', 'UmumController@registrasi')->name('register');
Route::post('/registrasi', 'RegisterController@registrasi')->name('registrasi');

 //Pasien
 Route::group(['prefix' => '/pasien'], function() {
    Route::post('/registrasi', 'RegisterController@registrasi')->name('pasien.registrasi');
});




Route::group(['middleware' => ['auth',  'user.name'], 'prefix' => 'user', 'namespace' => 'User'], function(){

    Route::get('/home', 'HomeController@index')->name('user.home');

    Route::get('/penyakit', 'MenuController@infoPenyakit')->name('user.info-penyakit');
    Route::get('/penyakit/{id}', 'MenuController@show')->name('user.show');

    Route::get('/log-konsultasi', 'MenuController@logKonsultasiUser')->name('user.log-konsultasi');
    Route::get('/log-konsultasi/detail/{id}', 'MenuController@detailLog')->name('user.log-konsultasi.detail');
    Route::get('/log-konsultasi/detail/{id}/rumus', 'MenuController@rumus')->name('user.rumus');

    Route::get('/balita', 'BalitaController@index')->name('user.balita');
    Route::get('/balita/edit/{id}', 'BalitaController@edit')->name('user.balitaedit');
    Route::post('/balita/update/{id}', 'BalitaController@update')->name('user.balita.update');


    Route::get('/register', 'HomeController@registrasi')->name('user.register');
    Route::post('/registrasi', 'BalitaController@insert')->name('user.registrasi');

    Route::get('/data-user', 'MenuController@DataUser')->name('user.data-user');
    Route::post('user/data-user/update/{id}', 'MenuController@DataUserUpdate')->name('user.data-user.update');



            //Diagnosa
            Route::group(['prefix' => '/diagnosa'], function() {
            Route::get('/', 'DiagnosaController@index')->name('diagnosa.list');
            Route::post('/hasil', 'DiagnosaController@diagnosa')->name('diagnosa');
            Route::get('/export/{balita}/{penyakit}/{diagnosa}', 'DiagnosaController@export')->name('export');

            });

            //DiagnosaBC
            Route::group(['prefix' => '/diagnosabc'], function() {
                Route::get('/', 'DiagnosaController@indexbc')->name('diagnosabc.list');
                Route::post('/vl', 'DiagnosaController@diagnosabc')->name('diagnosabc');
                Route::post('/hasil', 'DiagnosaController@diagnosaakhir')->name('diagnosaakhir');
            });

});

Route::group(['middleware' => ['auth',  'user.name'], 'prefix' => 'admin', 'namespace' => 'Admin'], function(){

    Route::get('/home', 'HomeController@index')->name('admin.home');
    Route::get('/kelola', 'MenuController@kelola')->name('admin.kelola');
    Route::get('/log-konsultasi', 'MenuController@logKonsultasi')->name('admin.log-konsultasi');
    Route::get('admin/log-konsultasi/print', 'MenuController@print')->name('admin.log-konsultasi.print');


    Route::get('/log-konsultasi/detail/{id}', 'MenuController@detailLog')->name('admin.log-konsultasi.detail');
    Route::get('/log-konsultasi/detail/{id}/rumus', 'MenuController@rumus')->name('admin.rumus');
    Route::get('/informasi', 'MenuController@informasi')->name('admin.informasi');
    Route::get('/reset-password', 'MenuController@resetPassword')->name('admin.reset-password');
    Route::post('/reset', 'MenuController@updatePassword')->name('admin.reset-password.store');


    //Penyakit
    Route::group(['prefix' => '/penyakit'], function() {
        Route::get('/', 'PenyakitController@index')->name('admin.penyakit');
        Route::get('/create', 'PenyakitController@create')->name('admin.penyakit.create');
        Route::post('/store', 'PenyakitController@store')->name('admin.penyakit.store');
        Route::get('/edit/{id}', 'PenyakitController@edit')->name('admin.penyakit.edit');
        Route::post('/update/{id}', 'PenyakitController@update')->name('admin.penyakit.update');
        Route::get('/destroy/{id}', 'PenyakitController@destroy')->name('admin.penyakit.destroy');

    });

       //Pengguna
       Route::group(['prefix' => '/pengguna'], function() {
        Route::get('/', 'PenggunaController@index')->name('admin.pengguna');
        Route::get('/create', 'PenggunaController@create')->name('admin.pengguna.create');
        Route::post('/store', 'PenggunaController@store')->name('admin.pengguna.store');
        Route::get('/detail/{id}', 'PenggunaController@detail')->name('admin.pengguna.detail');
        Route::post('/update/{id}', 'PenggunaController@update')->name('admin.pengguna.update');
        Route::get('/destroy/{id}', 'PenggunaController@destroy')->name('admin.pengguna.destroy');

    });


    //Gejala
    Route::group(['prefix' => '/gejala'], function() {
        Route::get('/', 'GejalaController@index')->name('admin.gejala');
        Route::get('/create', 'GejalaController@create')->name('admin.gejala.create');
        Route::post('/store', 'GejalaController@store')->name('admin.gejala.store');
        Route::get('/edit/{id}', 'GejalaController@edit')->name('admin.gejala.edit');
        Route::post('/update/{id}', 'GejalaController@update')->name('admin.gejala.update');
        Route::get('/destroy/{id}', 'GejalaController@destroy')->name('admin.gejala.destroy');

    });

     //Relasi
     Route::group(['prefix' => '/relasi'], function() {
        Route::get('/', 'RelasiController@index')->name('admin.relasi');
        Route::get('/create', 'RelasiController@create')->name('admin.relasi.create');
        Route::post('/store', 'RelasiController@store')->name('admin.relasi.store');
        Route::get('/edit/{id}', 'RelasiController@edit')->name('admin.relasi.edit');
        Route::post('/update/{id}', 'RelasiController@update')->name('admin.relasi.update');
        Route::get('/destroy/{id}', 'RelasiController@destroy')->name('admin.relasi.destroy');

    });



});
