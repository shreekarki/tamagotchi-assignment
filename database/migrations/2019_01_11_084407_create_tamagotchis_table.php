<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTamagotchisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamagotchis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('age');
            $table->tinyInteger('coins');
            $table->tinyInteger('level');
            $table->tinyInteger('health');
            $table->tinyInteger('boredom');
            $table->tinyInteger('state');
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
        Schema::dropIfExists('tamagotchis');
    }
}
