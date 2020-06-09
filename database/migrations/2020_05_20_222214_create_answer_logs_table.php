<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('answer_id')->unsigned()->index();
            $table->bigInteger('question_id')->unsigned()->index();
            $table->bigInteger('option_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('answer_id')->references('id')->on('answers')->cascadeOnDelete();
            $table->foreign('question_id')->references('id')->on('mental_condition_questions')->cascadeOnDelete();
            $table->foreign('option_id')->references('id')->on('mental_condition_question_options')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_logs');
    }
}
