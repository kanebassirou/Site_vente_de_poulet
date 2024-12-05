<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommandeValidated extends Notification
{
    use Queueable;
    private $commande;

    /**
     * Create a new notification instance.
     */
    public function __construct($commande)
    {
        $this->commande = $commande;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Votre commande a été validée')
                    ->greeting('Bonjour ' . $notifiable->name . ',')
                    ->line('Nous sommes heureux de vous informer que votre commande a été validée.')
                    ->action('Voir la commande', url('/'))
                    ->line('Merci d\'avoir utilisé notre application GunarGUi la site de vente de poulet au senegal !');
    }
    

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
