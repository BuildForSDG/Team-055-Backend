<?php

namespace App\Http\Controllers\Api\MedicalExpert;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\MedicalExpert\ListRequest;
use App\Http\Resources\Api\MedicalExpert\MedicalExpertResource;
use App\Models\MedicalExpert;
use Illuminate\Http\Request;

class MedicalExpertController extends Controller
{
    public function lists(ListRequest $request)
    {
        $medical_experts = MedicalExpert::when($request->state, function($query) use ($request) {
                                return $query->where('state_id', $request->state);
                            })->get();
        return MedicalExpertResource::collection($medical_experts);
    }
}
