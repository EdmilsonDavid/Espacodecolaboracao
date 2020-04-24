<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulohome');
            $table->string('subtitulohome');
            $table->string('colaboracaosobre');
            $table->string('dsmsobre');
            $table->string('tituloprojecto');
            $table->string('titulopedirestagio');
            $table->string('subtitulopedirestagio');
            $table->string('paragrafopedirestagio');
            $table->string('contactostexto');
            $table->string('modificadopor');
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
        Schema::dropIfExists('paginas');
    }
}
