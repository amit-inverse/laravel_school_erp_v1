<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();

            $table->bigIncrements('teacher_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('phone');
            $table->longText('address');
            $table->longText('current_address');
            $table->string('nationality');
            $table->tinyInteger('status');
            $table->date('date_registered');
            $table->integer('user_id');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
