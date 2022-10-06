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
        Schema::create('componente_marcas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('componente_id')->references('id')->on('componentes');
            $table->foreignId('marca_id')->references('id')->on('marcas');
            $table->integer('cantidad')->unsigned();
            $table->string('comentario');

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
        Schema::dropIfExists('componenteMarca');
    }
};
