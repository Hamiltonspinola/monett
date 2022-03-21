<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->foreign('pedido_id')->
                    references('id')->
                    on('pedidos')->
                    onDelete('cascade');
                    
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->
                    references('id')->
                    on('produtos')->
                    onDelete('cascade');

            $table->integer('quantidade');
            $table->double('valor', 15, 8);
                    
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
        Schema::dropIfExists('pedido_item');
    }
}
