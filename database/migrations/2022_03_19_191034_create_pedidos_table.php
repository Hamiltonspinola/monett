<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->
                    references('id')->
                    on('users')->
                    onDelete('cascade');

            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->
                    references('id')->
                    on('produtos')->
                    onDelete('cascade');
                    
            $table->enum('statys', ['pendente','preparando', 'emEntrega', 'entregue']);
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
        Schema::dropIfExists('pedidos');
    }
}
