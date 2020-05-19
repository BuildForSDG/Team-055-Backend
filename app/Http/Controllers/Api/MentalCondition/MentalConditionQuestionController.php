<?php

namespace App\Http\Controllers\Api\MentalCondition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MentalConditionQuestion\StoreRequest;
use App\Http\Requests\Api\MentalConditionQuestion\UpdateRequest;
use App\Http\Resources\Api\MentalCondition\MentalConditionQuestionResource;
use App\Models\MentalCondition;
use App\Models\MentalConditionQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MentalConditionQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->only(['store', 'update', 'delete']);
        $this->middleware('role:Admin')->only(['store', 'update', 'delete']);
    }

    public function lists(MentalCondition $mentalCondition)
    {
        return MentalConditionQuestionResource::collection($mentalCondition->mental_condition_questions);
    }

    public function store(StoreRequest $request, MentalCondition $mentalCondition)
    {
        DB::transaction(function () use ($request, $mentalCondition, &$question) {
            $question = $mentalCondition->mental_condition_questions()->create([
                'question' => $request->question
            ]);
            $this->createQuestionOptions($question, $request->options);
        });

        return new MentalConditionQuestionResource($question);
    }

    public function update(UpdateRequest $request, MentalCondition $mentalCondition,
                           MentalConditionQuestion $mentalConditionQuestion)
    {
        DB::transaction(function () use($mentalConditionQuestion, $request) {
            $mentalConditionQuestion->question = $request->question;
            $mentalConditionQuestion->save();
            $mentalConditionQuestion->mental_condition_question_options()->delete();
            $this->createQuestionOptions($mentalConditionQuestion, $request->options);
        });
        return new MentalConditionQuestionResource(MentalConditionQuestion::find($mentalConditionQuestion->id));
    }

    public function delete(MentalCondition $mentalCondition, MentalConditionQuestion $mentalConditionQuestion)
    {
        $mentalConditionQuestion->delete();
        return $this->deleteResponse();
    }

    private function createQuestionOptions($question, $options)
    {
        foreach ($options as $option) {
            $question->mental_condition_question_options()->firstOrCreate([
                'option' => $option
            ]);
        }
    }
}
