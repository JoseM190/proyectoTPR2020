<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->unsignedInteger('id_detail');
            $table->foreign('id_detail')->references('id')->on('exam_details');
            $table->date('date_exam');
            $table->integer('note_exam');
            $table->unsignedInteger('id_student');
            $table->foreign('id_student')->references('id')->on('users');
            $table->unsignedInteger('id_teacher');
            $table->foreign('id_teacher')->references('id')->on('users');
            $table->unsignedInteger('id_themes');
            $table->foreign('id_themes')->references('id')->on('themes');
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
        Schema::dropIfExists('exams');
    }
}
