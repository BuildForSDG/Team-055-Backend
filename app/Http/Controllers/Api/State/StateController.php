<?php

namespace App\Http\Controllers\Api\State;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\State\LgaResource;
use App\Http\Resources\Api\State\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function lists()
    {
        $states = State::orderBy('name', 'asc')->get();
        return StateResource::collection($states);
    }

    public function lgaLists(State $state)
    {
        return LgaResource::collection($state->lgas);
    }
}
