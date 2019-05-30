<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams_tournaments', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_team');
            $table->unsignedInteger('id_tournament');
            $table->integer('vitorias')->nullable();
            $table->integer('derrotas')->nullable();
            $table->integer('empates')->nullable();
            $table->decimal('pontos_favor')->nullable();
            $table->decimal('pontos_contra')->nullable();
            /*$table->string('permission')->default('default');*/

            $table->timestampsTz();
            $table->softDeletes();

            $table->foreign('id_team')->references('id')->on('teams');
            $table->foreign('id_tournament')->references('id')->on('tournaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('teams_tournaments', function (Blueprint $table) {
            $table->dropForeign('teams_tournaments_id_team_foreign');
            $table->dropForeign('teams_tournaments_id_tournament_foreign');
        });

        Schema::dropIfExists('teams_tournaments');
    }
}
