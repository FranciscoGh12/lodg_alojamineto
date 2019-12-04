<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->char('num_room',8);
            $table->char('status_room',4);
            $table->string('description',100);
            $table->decimal('prize_room',8,2);
            $table->integer('type_room_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('type_room_id')->references('id')->on('type_rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
