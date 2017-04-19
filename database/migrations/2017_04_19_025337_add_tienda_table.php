<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTiendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->double('promedio_calificacion')->nullable();
            $table->string('calle', 100);
            $table->integer('numero');
            $table->time('hora_inicio');
            $table->time('hora_cierre');
            $table->time('hora_almuerzo')->nullable();
            $table->time('hora_dalmuerzo')->nullable();
            $table->string('dia_inicio', 10);
            $table->string('dia_termino', 10);
            $table->integer('cant_favoritos')->nullable();

            $table->integer('usuario_id')->unsigned();

            $table->foreign('usuario_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('tiendas');
    }
}
