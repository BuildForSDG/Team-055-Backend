<?php

namespace App\Http\Controllers\Frontend;

use App\Enum\UserStatus;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function verify($token)
    {
        $user = User::where('remember_token', $token)->first();
        if($user) {
            $user->remember_token = '';
            $user->email_verified_at = Carbon::now();
            $user->status = UserStatus::ACTIVE;
            $user->save();
            return view('user.verify');
        }
        return $this->resourceNotFound();
    }
}
