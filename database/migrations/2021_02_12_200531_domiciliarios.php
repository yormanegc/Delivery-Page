<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Domiciliarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domiciliarios', function(Blueprint $domiciliario){
            $domiciliario->id();
            $domiciliario->string('nombre');
            $domiciliario->string('apellido');
            $domiciliario->string('cedula');
            $domiciliario->string('numerotelle');
            $domiciliario->string('sexo');
            $domiciliario->text('direccion');
            $domiciliario->string('img');
            $domiciliario->timestamps();
       }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domiciliarios');
    }
}
