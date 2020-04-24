<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgectoestagiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progectoestagiarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estagiario_id');
            $table->foreign('estagiario_id')->references('id')->on('estagiarios')->onDelete('cascade');
            $table->unsignedBigInteger('progecto_id');
            $table->foreign('progecto_id')->references('id')->on('progectos')->onDelete('cascade');
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
        Schema::dropIfExists('progectoestagiarios');
    }
}
