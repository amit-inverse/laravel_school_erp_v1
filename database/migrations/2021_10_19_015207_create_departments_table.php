<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();

            $table->bigIncrements('department_id');
            $table->integer('faculty_id');
            $table->string('department_name');
            $table->string('department_code')->unique();
            $table->text('department_description');
            $table->tinyInteger('department_status')->default(0);
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
        Schema::dropIfExists('departments');
    }
}
