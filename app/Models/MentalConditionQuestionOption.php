<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentalConditionQuestionOption extends Model
{
    protected $fillable = ['option'];

    public function mental_condition_question()
    {
        return $this->belongsTo(MentalConditionQuestion::class);
    }
}
