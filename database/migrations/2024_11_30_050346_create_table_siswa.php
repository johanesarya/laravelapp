<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('nisn', 4) -> unique();
            $table -> string('nama_siswa', 30);
            $table -> date('tanggal_lahir');
            $table -> enum('jenis_kelamin', ['L', 'P']);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswa');
    }
}
