<?php

namespace App\Http\Controllers\Api\MentalCondition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MentalConditionQuestion\StoreRequest;
use App\Http\Requests\Api\MentalConditionQuestion\UpdateRequest;
use App\Http\Resources\Api\MentalCondition\MentalConditionQuestionResource;
use App\Models\MentalCondition;
use App\Models\MentalConditionQuestion;
use Illuminate\Http\Request;

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
        $question = $mentalCondition->mental_condition_questions()->create([
            'question' => $request->question
        ]);
        return new MentalConditionQuestionResource($question);
    }

    public function update(UpdateRequest $request, MentalCondition $mentalCondition,
                           MentalConditionQuestion $mentalConditionQuestion)
    {
        $mentalConditionQuestion->question = $request->question;
        $mentalConditionQuestion->save();
        return new MentalConditionQuestionResource(MentalConditionQuestion::find($mentalConditionQuestion->id));
    }

    public function delete(MentalCondition $mentalCondition, MentalConditionQuestion $mentalConditionQuestion)
    {
        $mentalConditionQuestion->delete();
        return $this->deleteResponse();
    }
}
