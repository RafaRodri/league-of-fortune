<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_tipo');
            $table->unsignedInteger('id_patrocinio')->nullable();
            $table->string('nome');
            $table->integer('qtd_participantes');
            $table->integer('temporada');

            $table->timestampsTz();
            $table->softDeletes();


            $table->foreign('id_tipo')->references('id')->on('types');
            $table->foreign('id_patrocinio')->references('id')->on('sponsors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournaments', function (Blueprint $table) {
            $table->dropForeign('tournaments_id_tipo_foreign');
            $table->dropForeign('tournaments_id_patrocinio_foreign');
        });

        Schema::dropIfExists('tournaments');
    }
}
