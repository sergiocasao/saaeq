<?php

namespace App\Notifications\Users;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Setting;

class ActivationAccountNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
                    ->from( 'no-reply@saaeq.com', env('APP_NAME') )
                    ->success()
                    ->subject('Activa tu cuenta de '. env('APP_NAME'))
                    ->greeting( 'Hola '.$notifiable->name.'!' )
                    ->line( 'Ahora que ya estás registrado en SAAEQ solo falta activar tu cuenta.' )
                    ->action( 'Activar mi cuenta', $notifiable->getActivationAcountUrl() )
                    ->line( 'Ingresa este código: '.$notifiable->activation_code.' y listo.' );
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
