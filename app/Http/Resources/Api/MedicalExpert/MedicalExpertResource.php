<?php

namespace App\Http\Resources\Api\MedicalExpert;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicalExpertResource extends JsonResource
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
            'title' => $this->title,
            'name' => $this->full_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'state' => $this->state->name,
            'address' => $this->address,
            'about' => $this->about,
            'image' => $this->getMedicalExpertImageLink()
        ];
    }
}
