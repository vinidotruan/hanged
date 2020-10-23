<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvpGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvp_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_one_id');
            $table->unsignedBigInteger('player_two_id');
            $table->unsignedBigInteger('category_id');
            $table->integer('points_player_one')->nullable();
            $table->integer('points_player_two')->nullable();
            $table->foreign('player_one_id')->references('id')->on('users');
            $table->foreign('player_two_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('pvp_games');
    }
}
