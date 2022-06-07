<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('pel_titulo', 45);
            $table->string('pel_descripcion', 45);
            $table->string('pel_temporadas', 60);
            $table->string('pel_capitulo', 60);
            $table->date('pel_fecha');
            $table->binary('pel_cover');

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
        Schema::dropIfExists('peliculas');
    }
}
