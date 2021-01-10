<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentQuizeAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student__quize__answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('correctanswer');//1,2,3, ...
            $table->foreignId('question_id');
            $table->foreignId('student_quize_id');
            $table->boolean('submited')->default(false);
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
        Schema::dropIfExists('student__quize__answers');
    }
}
