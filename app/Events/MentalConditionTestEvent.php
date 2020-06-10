<?php

namespace App\Events;

use App\Models\Answer;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MentalConditionTestEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $answer;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, Answer $answer)
    {
        $this->user = $user;
        $this->answer = $answer;
    }
}
