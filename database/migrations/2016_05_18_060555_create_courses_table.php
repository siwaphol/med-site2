<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code');
            $table->string('name_th')->nullable();
            $table->string('name_en');
            $table->text('announcement')->nullable();
            $table->text('announcement_file')->nullable();
            $table->text('exam_schedule')->nullable();
            $table->text('score_criteria')->nullable();

            $table->dateTime('mid_exam')->nullable();
            $table->string('mid_exam_room')->nullable();
            $table->dateTime('final_exam')->nullable();
            $table->string('final_exam_room')->nullable();

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
        Schema::drop('courses');
    }
}
