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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id_usuario');
            $table->primary('id_usuario');
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->integer('num_miembros')->nullable();
            $table->string('email')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('preferencia')->nullable();
            $table->string('tipo')->nullable();
            $table->string('contraseña')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
};
