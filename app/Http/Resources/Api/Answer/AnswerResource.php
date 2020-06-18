<?php

namespace App\Http\Resources\Api\Answer;

use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
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
            'email' => $this->user->email,
            'mental_condition' => $this->mental_condition->mental_condition,
            'level' => $this->level,
            'scored_point' => $this->scored_point,
            'possible_ailment' => $this->possible_ailment,
            'answer_logs' => AnswerLogResource::collection($this->answer_logs)
        ];
    }
}
