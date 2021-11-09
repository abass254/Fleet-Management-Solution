<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignAssetsTable extends Migration
{
    /**
     * Run the migrations.
     * '', '', '', '', ''
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_assets', function (Blueprint $table) {
            $table->id();
            $table->string('staff');
            $table->string('item');
            $table->string('date_issued');
            $table->string('status');
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
        Schema::dropIfExists('assign_assets');
    }
}
