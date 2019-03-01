<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('client_id');
            $table->integer('report_type_id');
            $table->string('agency_id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('destination');
            $table->string('position_applied');
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
        Schema::dropIfExists('pending_reports');
    }
}
