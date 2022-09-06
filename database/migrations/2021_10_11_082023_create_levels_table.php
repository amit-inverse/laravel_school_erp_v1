<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();

            $table->bigIncrements('level_id');
            $table->string('level');
            $table->integer('course_id')->unsigned();
            $table->text('level_description');
            $table->softDeletes();
            // $table->foreign('course_id')->references('level_id')->on('ptable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
