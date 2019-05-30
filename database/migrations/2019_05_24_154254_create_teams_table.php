<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');

            $table->string('id_cartola', 20)->unique();
            $table->string('nome_cartola', 100);
            $table->string('nome_time', 100);
            $table->string('slug_time', 100)->nullable();
            $table->string('facebook_id', 40)->nullable();
            $table->string('url_escudo_png', 254)->nullable();
            $table->string('url_escudo_svg', 254)->nullable();
            $table->string('foto_perfil', 254)->nullable();

            $table->timestampsTz();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
