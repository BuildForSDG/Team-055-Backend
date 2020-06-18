<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalExpert extends Model
{
    protected $guarded = [];

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
