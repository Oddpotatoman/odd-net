<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PickupCategoryPickupLine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickupCategory_pickupLine', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pickupCategory_id');
            $table->integer('pickupLine_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pickupCategory_pickupLine');
    }
}
