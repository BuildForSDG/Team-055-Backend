<?php

namespace App\Notifications;

use App\Models\Answer;
use App\Models\MedicalExpert;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendUserTestResult extends Notification
{
    use Queueable;

    protected $user;
    protected $answer;
    protected $expert;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user, Answer $answer, MedicalExpert $expert)
    {
        $this->user = $user;
        $this->answer = $answer;
        $this->expert = $expert;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Hi '.$this->user->name)
                    ->line('Thank you for taking the test on mindcare')
                    ->line('Your score point is '.$this->answer->scored_point)
                    ->line('We recommend you '.$this->answer->possible_ailment)
                    ->line('We are sharing you info of our medical expert')
                    ->line('Name : '.$this->expert->title.' '.$this->expert->full_name)
                    ->line('Phone Number : '.$this->expert->phone_number)
                    ->line('About : '.$this->expert->about)
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
