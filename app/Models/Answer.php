<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mental_condition()
    {
        return $this->belongsTo(MentalCondition::class);
    }

    public function answer_logs()
    {
        return $this->hasMany(AnswerLog::class);
    }
}
