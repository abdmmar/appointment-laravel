<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('mahasiswa_id');

            $table->foreign('mahasiswa_id')
                ->references('id')
                ->on('mahasiswa')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedInteger('dosen_id');

            $table->foreign('dosen_id')
                ->references('id')
                ->on('dosen')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('judul');
            $table->string('deskripsi');
            $table->dateTime('awal');
            $table->dateTime('akhir');
            $table->dateTime('create_at');
            $table->dateTime('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
