<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pedidos', function(Blueprint $pedido){
            $pedido->id();
            $pedido->string('nombreap');
            $pedido->string('tipo');
            $pedido->string('cedula');
            $pedido->string('numerotel');
            $pedido->text('direcciondeen');
            $pedido->text('direccionderetiro');
            $pedido->timestamps();
            $pedido->string('domiasi')->nullable();
            $pedido->string('estado')->default('En proceso');

            $pedido->unsignedBigInteger('user_id')->nullable();

            $pedido->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
       }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
