<?php

namespace App\Http\Resources\Api\MentalCondition;

use Illuminate\Http\Resources\Json\JsonResource;

class MentalConditionQuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'question' => $this->question
        ];
    }
}
