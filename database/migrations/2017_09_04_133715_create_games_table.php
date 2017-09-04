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
            $table->string('name');
            $table->string('tagline');
            $table->string('short_description');
            $table->mediumText('description');
            $table->timestamps();
            $table->string('advisory');
            $table->integer('min');
            $table->integer('max');
            $table->integer('created_by');
            $table->integer('edited_by');
            $table->string('game_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
