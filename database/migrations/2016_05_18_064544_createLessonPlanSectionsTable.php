<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonPlanSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_plan_sections', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('lesson_plan_id');
            $table->integer('course_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->date('selected_date')->nullable();

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
        Schema::drop('lesson_plan_sections');
    }
}
