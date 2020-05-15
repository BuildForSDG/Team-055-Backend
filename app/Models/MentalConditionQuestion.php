<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MentalConditionQuestion extends Model
{
    protected $fillable = ['question'];

    public function mental_condition()
    {
        return $this->belongsTo(MentalCondition::class);
    }
}
