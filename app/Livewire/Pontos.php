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
            return redirect()->back()->withErrors('Token inválido!');
        }

        $log_pontos = Log_Token::where('id_user', Auth::user()->id)
            ->where('token', $this->token)
            ->first();

        // Verifica se o token já foi registrado
        if (!empty($log_pontos)) {
            return redirect()->back()->withErrors('Token já foi utilizado!');
        }

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

        return redirect()->back()->withSuccess('Token inserido com sucesso!');
    }


    public function render()
    {
        return view('livewire.pontos');
    }
}
