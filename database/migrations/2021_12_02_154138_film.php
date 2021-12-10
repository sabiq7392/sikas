<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Film extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function(Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('ringkasan');
            $table->integer('tahun');
            $table->string('poster');
            $table->foreignId('genre_id')->references('id')->on('genre');
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
        //
    }
}
