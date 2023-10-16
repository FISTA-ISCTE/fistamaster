<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailCTF extends Mailable
{
    use Queueable, SerializesModels;
    public $contest;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contest)
    {
        $this->contest = $contest;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.concurso_CTF')
                    ->subject('FISTA23 - Concurso CTF');
    }
}
