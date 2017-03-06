<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidotwosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('exame_pedido', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('exame_id')->unsigned();
          $table->integer('pedido_id')->unsigned();
          $table->foreign('exame_id')->references('id')->on('exames')->onDelete('cascade');
          $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidotwos');
    }
}
