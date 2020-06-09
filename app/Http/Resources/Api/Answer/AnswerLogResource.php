<?php

namespace App\Http\Resources\Api\Answer;

use Illuminate\Http\Resources\Json\JsonResource;

class AnswerLogResource extends JsonResource
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
            'question' => $this->mental_condition_question->question,
            'answer' => $this->mental_condition_question_option->option
        ];
    }
}
