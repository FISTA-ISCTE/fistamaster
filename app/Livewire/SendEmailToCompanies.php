<?php

namespace App\Livewire;

use App\Mail\EmailSends;
use App\Models\Empresa;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SendEmailToCompanies extends Component
{
    public function sendEmails()
    {
        // Seleciona 7 empresas aleatórias
        $selectedCompanies = Empresa::where("plano", "premium")->inRandomOrder()->limit(7)->get();
        $selectedCompanyIds = $selectedCompanies->pluck('id');

        foreach ($selectedCompanies as $company) {
            // Enviar email para a empresa com o número 1
            Mail::to($company->email)->send(new EmailSends("TEXTO", "FISTA24 - Estacionamento"));
        }

        // Seleciona as restantes empresas que não foram escolhidas
        $remainingCompanies = Empresa::whereNotIn('id', $selectedCompanyIds)->get();

        foreach ($remainingCompanies as $company) {
            // Enviar email para a empresa com um número ou mensagem diferente, por exemplo, número 3
            Mail::to($company->email)->send(new EmailSends("TEXTO", "FISTA24 - Estacionamento"));
        }

        session()->flash('message', 'Emails enviados com sucesso para todas as empresas.');
    }
    public function render()
    {
        return view('livewire.send-email-to-companies');
    }
}
