<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams_games', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_team');
            $table->unsignedInteger('id_game');
            $table->decimal('pontos')->nullable();

            $table->timestampsTz();
            $table->softDeletes();


            $table->foreign('id_team')->references('id')->on('teams');
            $table->foreign('id_game')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('teams_games', function (Blueprint $table) {
            $table->dropForeign('teams_games_id_team_foreign');
            $table->dropForeign('teams_games_id_game_foreign');
        });

        Schema::dropIfExists('teams_games');
    }
}
