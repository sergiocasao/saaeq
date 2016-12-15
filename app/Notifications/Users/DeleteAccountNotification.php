<?php

namespace App\Notifications\Users;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DeleteAccountNotification extends Notification
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
                    ->from( 'no-reply@saaeq.com', env('APPNOMBRE') )
                    ->success()
                    ->subject( 'Hemos dado de baja tu cuenta.' )
                    ->greeting( 'Hola '.explode(' ', trim($notifiable->name) )[0].', ' )
                    ->line( 'Hemos desactivado tu cuenta, vuelve pronto. :(' )
                    ->line( 'Reactiva tu cuenta dando click aquí.' )
                    ->action( 'Activar cuenta', $notifiable->getMailActivationAcountUrl() )
                    ->line( 'Para volver a activarla inicia sesión como siempre lo haces.' );
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
