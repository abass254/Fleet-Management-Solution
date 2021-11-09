<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrivehsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //id    vehicle driver        

        Schema::create('drivehs', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle');
            $table->string('driver');
            $table->string('starting_odometer');
            $table->string('starting_date');
            $table->string('comments');
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
        Schema::dropIfExists('drivehs');
    }
}
