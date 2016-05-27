<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->increments('id');

            $table->string('category');
            $table->string('period');
            $table->text('content')->nullable();
            $table->string('slug')->nullable();
            $table->date('datetime')->nullable();
            $table->tinyInteger('is_published')->default(1);

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
        Schema::drop('curriculums');
    }
}
