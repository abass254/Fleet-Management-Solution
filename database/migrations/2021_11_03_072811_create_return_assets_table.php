<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *'', '', '', '', ''
     * @return void
     */
    public function up()
    {
        Schema::create('return_assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset');
            $table->string('date_returned');
            $table->string('comments');
            $table->string('condition');
            $table->string('collected_by');
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
        Schema::dropIfExists('return_assets');
    }
}
