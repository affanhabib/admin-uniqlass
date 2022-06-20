<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('nama');
            $table->string('slug');
            $table->string('tahun_berdiri');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->text('jadwal');
            $table->text('materi');
            $table->text('perlengkapan_peserta');
            $table->text('fasilitas');
            $table->text('keuntungan');
            $table->text('sertifikat');
            $table->string('inputer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitra');
    }
}
