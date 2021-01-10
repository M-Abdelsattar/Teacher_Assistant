<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonpartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessonparts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lessonpart_number');
            $table->integer('lesson_number');
            $table->integer('unit_number');
            $table->integer('level_number');
            $table->string('lessonpart_title');
            $table->string('lessonpart_Description');
            $table->string('lessonpart_url');
            $table->integer('lessonpart_duration');//in minutes
            $table->string('lessonpart_nonteurl');
            $table->string('lessonpart_homeworkurl');

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
        Schema::dropIfExists('lessonparts');
    }
}
