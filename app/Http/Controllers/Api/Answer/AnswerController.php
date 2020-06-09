<?php

namespace App\Http\Controllers\Api\Answer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Answer\StoreRequest;
use App\Http\Resources\Api\Answer\AnswerResource;
use App\Models\Answer;
use App\Models\MentalCondition;
use App\Models\MentalConditionQuestionOption;
use App\Services\MentalConditionPoint\MentalConditionPointService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->only(['store', 'lists']);
    }

    public function lists(MentalCondition $mentalCondition)
    {
        $answers = Answer::where('mental_condition_id', $mentalCondition->id)->where('user_id', request()->user()->id)->get();
        return AnswerResource::collection($answers);
    }

    public function store(StoreRequest $request,  MentalCondition $mentalCondition)
    {
        $data = $request->all();
        $options = MentalConditionQuestionOption::whereIn('question_id', Arr::pluck($data['answers'],'question'))->get();
        DB::transaction(function () use ($data, $options, &$answer, $mentalCondition) {
            $answer = request()->user()->answers()->create([
                'mental_condition_id' => $mentalCondition->id
            ]);

            foreach ($data['answers'] as $key => $value) {
                $question_options = $options->where('question_id', $value['question'])->toArray();
                $question_options_id = Arr::pluck($question_options, 'id');
                if(!in_array($value['option'], $question_options_id)) {
                    return response()
                        ->json(
                            [
                                'status' => 'error',
                                'message' => 'The selected option does not exists for question '.$question_options[0]->question
                            ],
                            422);
                }
                $answer->answer_logs()->create([
                    'question_id' => $value['question'],
                    'option_id' => $value['option']
                ]);
            }

            //update answer with scored point and possible ailment
            (new MentalConditionPointService($mentalCondition, $answer))->run();
        });
        return new AnswerResource($answer);
    }
}
