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
        Schema::create('libros', function (Blueprint $table) {
            $table->integer('isbn');
            $table->primary('isbn');
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->string('genero')->nullable();
            $table->string('recomendacion_generacional')->nullable();
            $table->integer('id_editorial');
            $table->foreign('id_editorial')->references('id_editorial')->on('editorials');
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
        Schema::dropIfExists('libros');
    }
};
