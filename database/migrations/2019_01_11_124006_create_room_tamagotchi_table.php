<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTamagotchiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('category_product', function (Blueprint $table) {
                   $table->increments('id');
                   $table->integer('tamagotchi_id')->unsigned();
                   $table->integer('room_id')->unsigned();
               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamagotchi_room');
    }
}
