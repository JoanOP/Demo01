<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
     $table->id();
       $table->string('nombre');
       $table->float('precio');
       $table->unsignedBigInteger('tipo_id');
       $table->unsignedBigInteger('fabricante_id');
       $table->string('imagen');
       $table->foreign('tipo_id')->references('id')->on('categorias');
       $table->foreign('fabricante_id')->references('id')->on('fabricantes');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
}


   

