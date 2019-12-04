<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('start_reservation');
            $table->date('end_reservation');
            $table->decimal('pay_reservation',8,2);
            $table->integer('room_id')->unsigned()->nullable();
            $table->integer('promo_id')->unsigned()->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('promo_id')->references('id')->on('promos')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
