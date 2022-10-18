<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Points extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function(Blueprint $points){
            $points->id();
            $points->text('comentario');
            $points->text('puntuacion');
            $points->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $points->unsignedBigInteger('pedido_id')->nullable();
            $points->timestamps();
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
