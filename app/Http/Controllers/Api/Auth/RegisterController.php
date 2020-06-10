<?php

namespace App\Http\Controllers\Api\Auth;

use App\Enum\UserStatus;
use App\Events\NewUser;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\Api\User\UserResource;
use App\Libraries\Utilities;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        DB::transaction(function() use($request, &$user) {
            //create a new user
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->status = UserStatus::PENDING;
            $user->remember_token = Utilities::generateToken();
            $user->save();

            $user->profile()->create([
                'state_id' => $request->state,
                'dob' => $request->dob,
                'phone_number' => $request->phone_number,
                'lga_id' => $request->lga ? $request->lga : null
            ]);

            //assign them a role of 'User'
            $user->assignRole('User');

            //dispatch an event to send email to user to verify account
            event(new NewUser($user));
        });
        return new UserResource($user);
    }
}
