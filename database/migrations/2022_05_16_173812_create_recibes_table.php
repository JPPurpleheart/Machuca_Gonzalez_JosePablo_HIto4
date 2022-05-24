<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibes', function (Blueprint $table) {
            $table->integer('id_usuario');
            $table->increments('id_usuario');
            $table->primary('id_usuario');
            $table->integer('id_producto');
            $table->date('fecha')->nullable();
            $table->integer('cantidad_entregada')->nullable();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_producto')->references('id_producto')->on('despensas');
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
        Schema::dropIfExists('recibes');
    }
};
