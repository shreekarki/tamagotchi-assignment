<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('size', array(2, 3, 5));
            $table->enum('type', array('relax', 'fight', 'game', 'working'));

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
        Schema::dropIfExists('hotelrooms');
    }
}
