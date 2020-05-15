<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    protected function mentalConditionId()
    {
        return $this->mentalCondition->id;
    }
}
