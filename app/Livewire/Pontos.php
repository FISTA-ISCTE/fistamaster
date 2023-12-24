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
        $log_pontos = Log_Token::where('id_user', Auth::user()->id)
            ->where('token', $this->token)
            ->first();

        $empresa_token = Tokens::where('token', $this->token)->first();

        $insert_ponto = new Log_Token();

        if (empty($empresa_token)) {
            echo "<script>
													alert('Token inválido!');
												</script>";
        } else {

            if (strcmp($empresa_token->descricao, 'jogo') !== 0) {

                if (strcmp($empresa_token->token, $this->token) == 0) {

                    # code..
                    if (!empty($log_pontos->token)) {

                        if (strcmp($log_pontos->token, $this->token) == 0) {
                            session()->flash('error', 'Token inválido!');
                            return;
                        } else {

                            $insert_ponto->id_user = Auth::user()->id;
                            $insert_ponto->token = $this->token;
                            $insert_ponto->tipo = $empresa_token->descricao;
                            $insert_ponto->pontos = $empresa_token->pontos;
                            $insert_ponto->save();
                            //Codigo invalido
                            $user = Auth::user();
                            $pontosint = $user->pontos;
                            $total = $pontosint + $empresa_token->pontos;
                            $user->pontos = $total;
                            $user->save();
                            session()->flash('success', 'Token inserido com sucesso!');
            return;

                        }
                    } else {

                        $insert_ponto->id_user = Auth::user()->id;
                        $insert_ponto->token = $this->token;
                        $insert_ponto->tipo = $empresa_token->descricao;
                        $insert_ponto->pontos = $empresa_token->pontos;
                        $insert_ponto->save();
                        //Codigo invalido
                        $user = Auth::user();
                        $pontosint = Auth::user()->pontos;
                        $total = $pontosint + $empresa_token->pontos;
                        $user->pontos = $total;
                        $user->save();

                        session()->flash('success', 'Token inserido com sucesso!');
                        return;
                    }
                } else {

                                                                                session()->flash('error', 'Token que introduziu é inválido ou já passou a época festiva!');
            return;
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.pontos');
    }
}
