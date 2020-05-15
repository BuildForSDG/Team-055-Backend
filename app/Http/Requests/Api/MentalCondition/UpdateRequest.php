<?php

namespace App\Http\Requests\Api\MentalCondition;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'condition' => [
                'sometimes',
                'required',
                Rule::unique('mental_conditions', 'mental_condition')->ignore($this->mentalCondition, 'slug')
            ]
        ];
    }
}
