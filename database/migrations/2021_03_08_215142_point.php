<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Point extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point', function(Blueprint $point){
            $point->id();
            $point->text('comentario');
            $point->text('puntuacion');
            $point->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $point->unsignedBigInteger('pedido_id')->nullable();
            $point->timestamps();
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
