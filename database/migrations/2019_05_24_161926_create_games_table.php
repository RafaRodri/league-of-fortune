<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_torneio');
            $table->unsignedInteger('id_rodada');
            $table->integer('vencedor')->nullable();

            $table->timestampsTz();
            $table->softDeletes();


            $table->foreign('id_torneio')->references('id')->on('tournaments');
            $table->foreign('id_rodada')->references('id')->on('rounds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('games', function (Blueprint $table) {
            // Apagar foreign key (nome-da-tabela_nome-do-campo_foreign)
            $table->dropForeign('games_id_torneio_foreign');
            $table->dropForeign('games_id_rodada_foreign');
        });

        Schema::dropIfExists('games');
    }
}
