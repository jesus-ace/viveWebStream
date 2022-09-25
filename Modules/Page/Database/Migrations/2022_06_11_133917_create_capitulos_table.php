<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitulos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('sub_name', 255)->nullable();
            $table->string('sinopsis', 1000);
            $table->unsignedBigInteger("temporada_id")->nullable();
            $table->string('nro_cap');
            $table->unsignedBigInteger("serie_id")->nullable();
            $table->string("cover");
            $table->string("video", 500)->nullable();
            $table->timestamps();

            $table->foreign("temporada_id")
            ->references('id')->on('temporadas')
            ->onDelete('set null');

            $table->foreign("serie_id")
            ->references('id')->on('series')
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
        Schema::dropIfExists('capitulos');
    }
}
