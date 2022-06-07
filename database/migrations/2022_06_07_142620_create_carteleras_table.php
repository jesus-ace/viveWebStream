<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartelerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carteleras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("serie_id")->nullable();
            $table->unsignedBigInteger("pelicula_id")->nullable();

            $table->foreign("serie_id")
            ->references('id')->on('series')
            ->onDelete('set null');

            $table->foreign("pelicula_id")
            ->references('id')->on('peliculas')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carteleras');
    }
}
