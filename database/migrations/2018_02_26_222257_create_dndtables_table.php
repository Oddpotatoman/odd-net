<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDndtablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dndtables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tableName');
            $table->string('from')->default(null);
            $table->string('previous_table')->default(null);
            $table->string('next_table')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dndtables');
    }
}
