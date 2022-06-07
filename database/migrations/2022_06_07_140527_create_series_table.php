<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('ser_titulo', 45);
            $table->string('ser_descripcion', 45);
            $table->string('ser_temporadas', 60);
            $table->string('ser_capitulo', 60);
            $table->date('ser_fecha');
            $table->binary('ser_cover');

            $table->unsignedBigInteger("categoria_id")->nullable();
            $table->unsignedBigInteger("clasificacion_id")->nullable();

            $table->foreign("categoria_id")
            ->references('id')->on('categorias')
            ->onDelete('set null');

            $table->foreign("clasificacion_id")
            ->references('id')->on('clasificacions')
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
        Schema::dropIfExists('series');
    }
}
