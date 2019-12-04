<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLodgmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodgments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_lodg', 100)->nullable()->default('text');
            $table->string('direction_lodg',100);
            $table->string('picture_lodg');
            $table->string('description_lodg');
            $table->char('type_lodg',32);
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
        Schema::dropIfExists('lodgments');
    }
}
