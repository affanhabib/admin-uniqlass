<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('caption');
            $table->string('tombol');
            $table->string('link');
            $table->text('deskripsi');
            $table->string('ig1');
            $table->string('ig2');
            $table->string('ig3');
            $table->string('yt1');
            $table->string('yt2');
            $table->string('yt3');
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
        Schema::dropIfExists('homepages');
    }
}
