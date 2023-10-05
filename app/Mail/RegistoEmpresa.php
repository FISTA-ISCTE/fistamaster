<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistoEmpresa extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    public $plano;
    public $preco;
    /**
     * Create a new message instance.
     */
    public function __construct($mail,$plano,$preco)
    {
        //
        $this->mail = $mail;
        $this->plano = $plano;
        $this->preco = $preco;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmação de Registo - FISTA24',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.empresas.emails.registo_empresas',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
