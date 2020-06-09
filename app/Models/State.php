<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function lgas()
    {
        return $this->hasMany(Lga::class);
    }
}
