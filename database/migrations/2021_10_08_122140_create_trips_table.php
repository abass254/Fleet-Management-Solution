<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            //'', '', '', '', '', '', '', ''
            $table->id();
            $table->string('trip_code');
            $table->string('from');
            $table->string('to');
            $table->string('date_of_trip');
            $table->string('return_date');
            $table->string('purpose');
            $table->string('status');
            $table->string('vehicle');
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
        Schema::dropIfExists('trips');
    }
}
