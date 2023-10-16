<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailWorkshop extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $workshop;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$workshop)
    {
        $this->user = $user;
        $this->workshop = $workshop;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.aviso_workshop')
                    ->subject('FISTA23 - Workshop');
    }
}
