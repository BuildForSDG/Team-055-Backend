<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentalConditionQuestionOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mental_condition_question_options', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id')->unsigned()->index();
            $table->text('option');
            $table->timestamps();

            $table->foreign('question_id')->references('id')
                    ->on('mental_condition_questions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mental_condition_question_options');
    }
}
