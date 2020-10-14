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
        Schema::create('exam__details', function (Blueprint $table) {
            $table->id('id_detail');
            $table->id('id_student');
            $table->foreign('id_student')->references('user_id')->on('users');
            $table->id('id_themes');
            $table->foreign('id_themes')->references('id_themes')->on('themes');
            $table->id('id_question');
            $table->foreign('id_question')->references('id_question')->on('questions');
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
        Schema::dropIfExists('exam__details');
    }
}