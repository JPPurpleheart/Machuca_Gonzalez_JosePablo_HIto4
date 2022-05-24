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
        Schema::create('roperos', function (Blueprint $table) {
            $table->integer('id_ropa');
            $table->primary('id_ropa');
            $table->string('nombre')->nullable();
            $table->string('color')->nullable();
            $table->string('estado')->nullable();
            $table->integer('categoria');
            $table->foreign('categoria')->references('id_categoria')->on('categorias');
            $table->integer('talla');
            $table->foreign('talla')->references('id_talla')->on('tallas');
            $table->integer('id_usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
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
        Schema::dropIfExists('roperos');
    }
};
