<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class OrderSuccessful extends Notification
{
    use Queueable;

    protected $amount;
    protected $customer;

    /**
     * Create a new notification instance.
     */
    public function __construct($amount,$customer)
    {
        $this->amount = $amount;
        $this->customer = $customer;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting('Hello')  
                    ->line('You have a new order alert')
                    ->action('View', url('/admin/home'))
                    ->line('Thank you!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'data' =>'The deposit of Ksh.'. number_format($this->amount).' by '. $this->customer.' was unsuccessful'
        ];
    }
}
