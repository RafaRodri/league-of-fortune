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
            $table->string('nome');
            $table->integer('temporada');

            $table->timestampsTz();
            $table->softDeletes();


            $table->foreign('id_tipo')->references('id')->on('types');
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
        });

        Schema::dropIfExists('tournaments');
    }
}
