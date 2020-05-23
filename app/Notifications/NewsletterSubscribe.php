<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewsletterSubscribe extends Notification
{
    use Queueable;

    public $newsletterEmail;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->newsletterEmail = $email;
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
        //ddd($this);

        return (new MailMessage)
                    ->greeting('Et hop ! Tu es à présent abonné !')
                    ->line("Tu seras désormais averti lors de la publication des nouvelles collections dans Laravel Collection.")
                    // ->action('Voir tous les abonnés', url('/newsletter'));
                    ->line('Laravel Collections, un service gratuit proposé par HappyToDev');
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
