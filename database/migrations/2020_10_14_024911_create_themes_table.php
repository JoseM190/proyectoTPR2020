<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id('id_themes')->autoIncrement();
            $table->string('title_theme');
            $table->id('id_teacher');
            $table->foreign('id_teacher')->references('user_id')->on('users');
            $table->id('id_subjects');
            $table->foreign('id_subjects')->references('id_subjects')->on('subjects');
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
        Schema::dropIfExists('themes');
    }
}
