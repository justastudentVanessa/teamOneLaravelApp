<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_details', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('teecolor');
	    $table->string('hole1yardage');
	    $table->string('hole2yardage');
	    $table->string('hole3yardage');
	    $table->string('hole4yardage');
	    $table->string('hole5yardage');
	    $table->string('hole6yardage');
	    $table->string('hole7yardage');
	    $table->string('hole8yardage');
	    $table->string('hole9yardage');
	    $table->string('hole10yardage');
	    $table->string('hole11yardage');
	    $table->string('hole12yardage');
	    $table->string('hole13yardage');
	    $table->string('hole14yardage');
	    $table->string('hole15yardage');
	    $table->string('hole16yardage');
	    $table->string('hole17yardage');
	    $table->string('hole18yardage');
	    $table->string('handicap');
	    $table->string('par');
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
        Schema::drop('course_details');
    }
}
