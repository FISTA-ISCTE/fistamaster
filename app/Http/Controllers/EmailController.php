<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

public function enviarEmailsArmazenados()
{
    $limiteDiario = 150; // Limite diário de e-mails

    // Verifique quantos e-mails já foram enviados hoje
    $emailsEnviadosHoje = Email::whereDate('updated_at', today())->count();

    if ($emailsEnviadosHoje < $limiteDiario) {
        // Recupere os registros da tabela onde pelo menos um dos campos de e-mail não é nulo
        $emails = Email::where(function ($query) {
            $query->whereNotNull('Email1')
                ->orWhereNotNull('Email2')
                ->orWhereNotNull('Email3')
                ->orWhereNotNull('Email4')
                ->orWhereNotNull('Email5');
        })
        ->where('status', '0')
        ->get();

        $emailChunks = $emails->chunk(50); // Agrupe os e-mails em lotes de 50 (ou qualquer número adequado)

        foreach ($emailChunks as $emailChunk) {
            foreach ($emailChunk as $email) {
                // Envie até 5 e-mails por linha, se não forem nulos
                $listaDeEmails = array_filter([
                    $email->Email1,
                    $email->Email2,
                    $email->Email3,
                    $email->Email4,
                    $email->Email5,
                ]);

                foreach ($listaDeEmails as $emailIndividual) {
                    // Envie o e-mail usando a função de envio de e-mail do Laravel
                    Mail::send('emails.convite_empresas', ['nome' => $email->Nome,], function ($message) use ($emailIndividual, $email) {
                        $message->to($emailIndividual, $email->Nome)->subject('Convite para a 11ª edição do FISTA');
                    });
                }

                // Atualize o status para "Enviado" após o envio
                $email->status = 1;
                $email->save();
            }
        }

        return "E-mails enviados com sucesso!";
    } else {
        return "Limite diário de e-mails atingido.";
    }
}
}
