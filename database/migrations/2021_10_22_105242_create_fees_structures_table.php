<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_structures', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();

            $table->bigIncrements('fees_structures_id');
            $table->integer('course_id');
            $table->integer('level_id');
            $table->integer('admission_fees');
            $table->integer('semester_fees');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fees_structures');
    }
}
