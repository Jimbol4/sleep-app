<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('time_to_bed');
            $table->string('time_asleep');
            $table->string('time_awake');
            $table->string('times_awake');
            $table->string('awake_duration');
            $table->string('sleep_length');
            $table->string('medication');
            $table->integer('well_rested');
            $table->integer('quality');
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
        Schema::drop('diary');
    }
}
