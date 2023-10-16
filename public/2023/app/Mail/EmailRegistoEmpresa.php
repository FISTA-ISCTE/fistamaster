<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailRegistoEmpresa extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    public $plano;
    public $preco;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($mail,$plano,$preco)
    {
        $this->mail = $mail;
        $this->plano = $plano;
        $this->preco = $preco;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.registerempresas')
                    ->subject('Verificação de registo do FISTA23');
    }
}
