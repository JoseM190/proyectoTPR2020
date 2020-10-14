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
            $table->id('id_exam')->autoIncrement();
            $table->string('description');
            $table->id('id_detail');
            $table->foreign('id_detail')->references('id_detail')->on('details');
            $table->date('date_exam');
            $table->integer('note_exam');
            $table->id('id_student');
            $table->foreign('id_student')->references('user_id')->on('users');
            $table->id('id_teacher');
            $table->foreign('id_teacher')->references('user_id')->on('users');
            $table->id('id_themes');
            $table->foreign('id_themes')->references('id_themes')->on('themes');
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
