<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderNotification extends Notification
{
    use Queueable;
    public $nameclient;
    public $TotalOrder;
    /**
     * Create a new notification instance.
     */
    public function __construct($nameclient,$TotalOrder)
    {
        $this->nameclient = $nameclient;
        $this->TotalOrder = $TotalOrder;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ['database'];

    }



    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray($notifiable)
    {
        return
        [
            'data' => "Vous avez une nouvelle commande du client ".$this->nameclient. ", la commande totale est de ". $this->TotalOrder." DH"
        ];
    }
}
