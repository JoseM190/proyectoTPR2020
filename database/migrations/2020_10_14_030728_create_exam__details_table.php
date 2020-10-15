<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_details', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('id_student');
            $table->foreign('id_student')->references('id')->on('users');
            $table->unsignedInteger('id_themes');
            $table->foreign('id_themes')->references('id')->on('themes');
            $table->unsignedInteger('id_question');
            $table->foreign('id_question')->references('id')->on('questions');
            $table->string('answer_student');
            $table->integer('score');
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
        Schema::dropIfExists('exam_details');
    }
}
