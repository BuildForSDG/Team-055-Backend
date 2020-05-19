<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentalConditionQuestionOption extends Model
{
    protected $fillable = ['option', 'mark'];

    public function mental_condition_question()
    {
        return $this->belongsTo(MentalConditionQuestion::class);
    }
}
