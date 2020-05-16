<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentalConditionQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mental_condition_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mental_condition_id')->unsigned()->index();
            $table->text('question');
            $table->timestamps();

            $table->foreign('mental_condition_id')->references('id')->on('mental_conditions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mental_condition_questions');
    }
}
