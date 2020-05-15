<?php

namespace App\Http\Controllers\Api\MentalCondition;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MentalCondition\StoreRequest;
use App\Http\Requests\Api\MentalCondition\UpdateRequest;
use App\Http\Resources\Api\MentalCondition\MentalConditionResource;
use App\Models\MentalCondition;
use Illuminate\Support\Str;

class MentalConditionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->only(['store', 'update', 'delete']);
        $this->middleware('role:Admin')->only(['store', 'update', 'delete']);
    }

    public function list()
    {
        $illnesses = MentalCondition::orderBy('created_at', 'desc')->paginate(15);
        return MentalConditionResource::collection($illnesses);
    }

    public function store(StoreRequest $request)
    {
        $mental_condition = new MentalCondition();
        $mental_condition->mental_condition = $condition = $request->condition;
        $mental_condition->slug = Str::slug($condition);
        $mental_condition->save();
        return new MentalConditionResource($mental_condition);
    }

    public function update(UpdateRequest $request, MentalCondition $mentalCondition)
    {
        $mentalCondition->mental_condition = $request->condition;
        $mentalCondition->slug = Str::slug($request->condition);
        $mentalCondition->save();
        return new MentalConditionResource(MentalCondition::find($mentalCondition->id));
    }

    public function delete(MentalCondition $mentalCondition)
    {
        $mentalCondition->delete();
        return $this->deleteResponse();
    }

    public function single(MentalCondition $mentalCondition)
    {
        return new MentalConditionResource($mentalCondition);
    }
}
