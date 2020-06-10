<?php

namespace App\Listeners;

use App\Events\MentalConditionTestEvent;
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
        $event->user->notify(new SendUserTestResult($event->user, $event->answer));
    }
}
