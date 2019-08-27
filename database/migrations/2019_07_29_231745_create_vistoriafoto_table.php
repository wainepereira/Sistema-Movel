<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistoriafotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vistoria_fotos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nome','200');   
            $table->dateTime('data');
            $table->text('comentario');
            $table->biginteger('cadastro_id')->unsigned();
            $table->foreign('cadastro_id')->references('id_cad_sit')->on('cadastro_site')->onDelete('cascade');
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
        Schema::dropIfExists('vistoria_fotos');
    }
}
