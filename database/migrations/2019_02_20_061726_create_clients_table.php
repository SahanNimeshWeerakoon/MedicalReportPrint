<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_url')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('destination');
            $table->string('position_applied');
            $table->integer('agency_id');
            $table->string('passport_no');
            $table->string('nationality');
            $table->string('age');
            $table->string('sex');
            $table->string('marital');
            $table->string('height');
            $table->string('weight');
            $table->string('llno');
            $table->string('place_of_issue');
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
        Schema::dropIfExists('clients');
    }
}
