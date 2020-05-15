<?php

namespace App\Http\Resources\Api\MentalCondition;

use Illuminate\Http\Resources\Json\JsonResource;

class MentalConditionResource extends JsonResource
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
            'condition' => $this->mental_condition,
            'slug' => $this->slug
        ];
    }
}
