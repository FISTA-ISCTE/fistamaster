<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;
use URL;

class ConfirmEmailNotification extends Notification
{
    /**
     * The callback that should be used to build the mail message.
     *
     * @var \Closure|null
     */
    public static $toMailCallback;

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->subject('Verificar Email')
            ->line('Por favor clique no botão abaixo para verificar o endereço mail.')
            ->action('Verificar email', $this->verificationUrl($notifiable))
            ->line(new HtmlString('Caso não consiga aceder ao botão clique <a href="' . $this->verificationUrl($notifiable) . '">AQUI</a>'))
            ->line('Se não criou uma conta, por favor ignore este email.');

    }

    protected function verificationUrl($notifiable)
    {
        return URL::route('verification.notice', ['uuid' => $notifiable->uuid]);
    }
}
