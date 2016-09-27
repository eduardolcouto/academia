<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_days', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->smallInteger('reps')->unsigned();
            $table->smallInteger('weight')->unsigned();
            $table->time('time');
            $table->integer('workout_type_id')->unsigned();
            $table->foreign('workout_type_id')->references('id')->on('workout_types');
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
        Schema::dropIfExists('workout_days');
    }
}
