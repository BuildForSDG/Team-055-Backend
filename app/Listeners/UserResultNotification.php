<?php

namespace App\Listeners;

use App\Events\MentalConditionTestEvent;
use App\Models\MedicalExpert;
use App\Notifications\SendUserTestResult;

class UserResultNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(MentalConditionTestEvent $event)
    {
        //send email to user
        $experts = MedicalExpert::where('state_id', $event->user->profile->state_id)->get()->shuffle()->first();
        $event->user->notify(new SendUserTestResult($event->user, $event->answer, $experts));
    }
}
