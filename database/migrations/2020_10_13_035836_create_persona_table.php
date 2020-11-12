<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->integer('carnet')->unsigned();
            $table->primary('carnet');
            $table->String('nombre');
            $table->String('apellido');
            $table->String('direccion');
            $table->integer('telefono');
            $table->String('tipo');    //Socio = 1   usuario normal = 0
            $table->integer('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
