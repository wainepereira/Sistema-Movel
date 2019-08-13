<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVistoriavideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vistoriavideo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('cadastro_id')->unsigned();
            $table->foreign('cadastro_id')->references('id_cad_sit')->on('cadastro_site')->onDelete('cascade');
            $table->string('Nome','200');   
            $table->datetime('data');
            $table->text('comentario');
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
        Schema::dropIfExists('vistoriavideo');
    }
}
