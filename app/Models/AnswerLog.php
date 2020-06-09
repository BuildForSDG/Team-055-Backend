<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerLog extends Model
{
    protected $fillable = ['question_id', 'option_id'];

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function mental_condition_question()
    {
        return $this->belongsTo(MentalConditionQuestion::class, 'question_id');
    }

    public function mental_condition_question_option()
    {
        return $this->belongsTo(MentalConditionQuestionOption::class, 'option_id');
    }
}
