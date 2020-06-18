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

    public function getMedicalExpertImageLink()
    {
        if($this->image_url) {
            return $this->image_url;
        }
        $hash = $this->phone_number ? $this->phone_number : $this->email;
        return 'https://www.gravatar.com/avatar/'.md5($hash).'?d=mp';
    }
}
