<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**id                                    

     * Run the migrations.
     *                                  
     * @return void
     */

    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year');
            $table->string('selling_price');
            $table->string('km_driven');
            $table->string('fuel');
            $table->string('seller_type');
            $table->string('transmission');
            $table->string('owner');
            $table->string('mileage');
            $table->string('engine');
            $table->string('max_power');
            $table->string('torque');
            $table->string('seats');
            $table->string('image');
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
        Schema::dropIfExists('vehicles');
    }
}
