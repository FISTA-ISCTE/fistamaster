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
                        dd($empresa_token->descricao);
                        if (strcmp($log_pontos->token, $this->token) == 0) {
                            echo "<script>
																													alert('Token já introduzido!');
																												</script>";
                        } else {
                            dd($empresa_token->descricao);
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
                            echo "<script>
																													alert('Token inserido com sucesso!');
																												</script>";
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
                        dd($user);


                        echo "<script>
																									alert('Token inserido com sucesso!');
																								</script>";
                    }
                } else {
                    echo "<script>
																					alert('Token que introduziu é inválido ou já passou a época festiva!');
																				</script>";
                }
            } else {
                $id_empres = $empresa_token->id_empresa;
                ///$questoes = Questao::where('id_empresa', $id_empres)->get();
                if (empty($log_pontos->token)) {
                    echo "<script>
																					alert('Faz a leitura do qr na aplicação do FISTA!');
																				</script>";
                    //return redirect()->route('jogo',[ 'q1' => $questoes[0]->id, 'q2' => $questoes[1]->id,'token' => $request->token]);
                } else {
                    echo "<script>
																					alert('Token já introduzido!Tenta outra empresa!');
																				</script>";
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.pontos');
    }
}
