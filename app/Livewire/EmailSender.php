<?php

namespace App\Livewire;

use App\Mail\EmailSends;
use App\Models\Empresa;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class EmailSender extends Component
{
    public $email;
    public $subject;
    public $select;
    public $text;

    public function sendEmail()
    {
        if (isset($this->email)) {
            $emails = explode(';', $this->email); // Separando os e-mails
            foreach ($emails as $email) {
                Mail::to($email)->send(new EmailSends($this->text, $this->subject));
            }
            session()->flash('success', 'E-mails enviados com sucesso!');
        } elseif (isset($this->select)) {
            $empresas = Empresa::where('plano', $this->select)->get();
            $emails = "";
            foreach ($empresas as $emp) {
                $emails .= $emp->email . ";";
                Mail::to($emp->email)->send(new EmailSends($this->text, $this->subject));
            }
            $emails = rtrim($emails, ";");
            $test="<h4>Email Enviado:</h4><br>". $this->text . "<br><br><h4>Para os Emails:</h4><br><br>". $emails;
            Mail::to("fista@iscte-iul.pt")->send(new EmailSends($test, "Emails Enviados através do Site"));
            session()->flash('success', 'E-mails enviados com sucesso!');
        } else {
            session()->flash('success', 'E-mails nao enviados com sucesso!');
        }

        // Resetar os campos ou adicionar uma mensagem de sucesso
        $this->reset(['email', 'subject', 'text']);
    }

    public function render()
    {
        return view('livewire.email-sender');
    }
}
