<?php

namespace App\Livewire;

use App\Models\Log_Token;
use App\Models\Tokens;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;



class Pontos extends Component
{
    public $token;
    public $historicoPontos = [];

    public function mount()
    {
        $this->updateHistorico();
    }
    public function save()
    {
        // Validação e autorização
        $empresa_token = Tokens::where('token', $this->token)->first();

        // Verifica se o token já foi registrado
        $log_pontos = Log_Token::where('id_user', Auth::user()->id)
            ->where('token', $this->token)
            ->first();

        if (isset($log_pontos)) {
            session()->flash('error', 'Token já inserido!');
            return;
        }

        // Se o token existir na tabela Tokens
        if ($empresa_token) {
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
            $this->updateHistorico();
            session()->flash('success', 'Token inserido com sucesso!');
            return;
        } else {
            // Verifica se o token existe como token_pessoal na tabela User
            $user_com_token = User::where('token_pessoal', $this->token)->first();

            if ( $user_com_token->id === Auth::user()->id  && !isset($user_com_token)) {
                session()->flash('error', 'Querias?😂 Token Inválido!');
                return;
            }
            if ($user_com_token) {
                $user = Auth::user();
                $user->pontos += 50; // Adiciona 50 pontos
                $user->save();

                $descricao = "Convidado de " . $user_com_token->name; // Nome do usuário que tem o token
                $descricao2 = "Código colocado por " . $user->name;
                $user_com_token->pontos +=50;
                $user_com_token->save();
                $insert_ponto2 = new Log_Token([
                    'id_user' => $user_com_token->id,
                    'token' => $this->token,
                    'tipo' => $descricao2,
                    'pontos' => 50
                ]);
                $insert_ponto2->save();

                $insert_ponto = new Log_Token([
                    'id_user' => $user->id,
                    'token' => $this->token,
                    'tipo' => $descricao,
                    'pontos' => 50
                ]);
                $insert_ponto->save();
                $this->updateHistorico();
                session()->flash('success', 'Token de ' . $user_com_token->name . ' inserido com sucesso!');
                return;
            } else {
                session()->flash('error', 'Token inválido!');
                return;
            }
        }
    }

    private function updateHistorico()
    {
        $this->historicoPontos = Log_Token::where('id_user', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->get()
            ->toArray();
    }


    public function render()
    {
        return view('livewire.pontos');
    }
}
