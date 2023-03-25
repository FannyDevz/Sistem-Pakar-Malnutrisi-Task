<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balita', function (Blueprint $table) {
            $table->string('id', 32)->primary();
            $table->string('user_id', 191)->nullable();
            $table->string('nama_lengkap', 50);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('umur', 191);
            $table->date('ttl')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balita');
    }
}
