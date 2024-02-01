<?php

namespace App\Livewire;

use App\Models\Log_Token;
use App\Models\Tokens;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;



class Pontos extends Component
{
    public $token;
    public function save()
    {
        // Validação e autorização
        $empresa_token = Tokens::where('token', $this->token)->first();

        if (!$empresa_token) {
            session()->flash('error', 'Token inválido!');
            return;
        }

        $log_pontos = Log_Token::where('id_user', Auth::user()->id)
            ->where('token', $this->token)
            ->first();

        // Verifica se o token já foi registrado
        if (isset($log_pontos)) {
            session()->flash('error', 'Token já inserido!');
            return;
        } else {

            // Registrar o token e adicionar pontos ao usuário
            $user = Auth::user();
            $user->pontos += $empresa_token->pontos;
            $user->save();

            $insert_ponto = new Log_Token([
                'id_user' => $user->id,
                'token' => $this->token,
                'tipo' => $empresa_token->descricao,
                'pontos' => $empresa_token->pontos
            ]);
            $insert_ponto->save();

            session()->flash('success', 'Token inserido com sucesso!');
            return;
        }
    }

    public function render()
    {
        return view('livewire.pontos');
    }
}
