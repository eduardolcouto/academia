<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sport_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table>-integer('qtde')->unsigned();
            $table->integer('modality_id')->unsigned();
            $table->foreign('modality_id')->references('id')->on('modalities');
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
        Schema::dropIfExists('sport_classes');
    }
}
