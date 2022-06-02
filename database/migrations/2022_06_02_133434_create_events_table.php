<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('poster')->nullable();
            $table->string('program');
            $table->string('subprogram')->nullable();
            $table->string('judul_event');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->time('waktu');
            $table->text('narasumber');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->string('link');
            $table->enum('show_carousel', ['0', '1'])->default('0');
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
        Schema::dropIfExists('events');
    }
}
