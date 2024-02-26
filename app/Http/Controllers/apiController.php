<?php

namespace App\Http\Controllers;


use App\Models\BackOfficeAlunosEmpresas;
use App\Models\CheckInConferencia;
use App\Models\CheckInTenda;
use App\Models\Empresa;
use App\Models\Feed;
use App\Models\Log_Token;
use App\Models\Tokens;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class apiController extends Controller
{
    public function registar(Request $request)
    {
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);
        $array = ['email' => $request->only('email')['email'], 'name' => $request->only('name')['name'], 'password' => $request->only('password')['password'], 'password_confirmation' => $request->only('password_confirmation')['password_confirmation']];
        $validator = Validator::make($array, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => 'Erro!', 'validator' => $validator->errors(), 'code' => 200]);
        } else {
            $user = $this->create($array);
            //$user->sendConfirmationEmail();
            return response()->json(['message' => 'Certo!', 'code' => 200]);
        }
    }
    public function authlogin(Request $request)
    {
        $loginDetails = $request->only('email', 'password');

        if (Auth::attempt($loginDetails)) {
            $user = Auth::user();
            $roleName = $user->getRoleNames()->first();
            return response()->json([
                'message' => 'login successful',
                'user' => $user,
                'role' => $roleName,
                'code' => 200
            ]);
        } else {
            return response()->json(['message' => 'wrong login', 'code' => 501]);
        }
    }

    public function update(Request $request)
    {
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);

        $uuid = $request->only('id');
        $User = User::where('uuid', $uuid)->first();
        if ($User) {
            $User->id_curso = $data["curso"];
            $User->save();
            return response()->json(['message' => 'Change Successful', 'code' => 200]);
        } else {
            return response()->json(['message' => 'Change Error', 'code' => 304]);
        }

    }

    public function updateAno(Request $request)
    {
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);

        $uuid = $request->only('id');
        $User = User::where('uuid', $uuid)->first();
        if ($User) {
            $User->id_ano = $data["ano"];
            $User->save();
            return response()->json(['message' => 'Change Successful', 'code' => 200]);
        } else {
            return response()->json(['message' => 'Change Error', 'code' => 304]);
        }

    }

    public function insertToken(Request $request)
    {
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);
        $uuid = $request->only('id');
        $token = $data["token"];
        $user = User::where('uuid', $uuid)->first();
        $token_sem = preg_replace('/\s+/', '', $token);
        // Validação e autorização
        $empresa_token = Tokens::where('token', $token_sem)->first();

        // Verifica se o token já foi registrado
        $log_pontos = Log_Token::where('id_user', $user->id)
            ->where('token', $token_sem)
            ->first();

        if (isset($log_pontos)) {
            return response()->json(['message' => 'Token já Introduzido!', 'code' => 304]);
        }

        // Se o token existir na tabela Tokens
        if ($empresa_token) {
            $user->pontos += $empresa_token->pontos;
            $user->save();

            $insert_ponto = new Log_Token([
                'id_user' => $user->id,
                'token' => $token,
                'tipo' => $empresa_token->descricao,
                'pontos' => $empresa_token->pontos
            ]);
            $insert_ponto->save();
            return response()->json(['message' => 'Token Válido!', 'pontos' => $user->pontos, 'code' => 200]);
        } else {
            // Verifica se o token existe como token_pessoal na tabela User
            $user_com_token = User::where('token_pessoal', $token_sem)->first();

            if (!isset($user_com_token) || $user_com_token->id === $user->id) {

                return response()->json(['message' => 'Token Inválido!', 'code' => 300]);
            }
            if ($user_com_token) {
                $user->pontos += 50; // Adiciona 50 pontos
                $user->save();

                $descricao = "Convidado de " . $user_com_token->name; // Nome do usuário que tem o token
                $descricao2 = "Código colocado por " . $user->name;
                $user_com_token->pontos += 50;
                $user_com_token->save();
                $insert_ponto2 = new Log_Token([
                    'id_user' => $user_com_token->id,
                    'token' => $token_sem,
                    'tipo' => $descricao2,
                    'pontos' => 50
                ]);
                $insert_ponto2->save();

                $insert_ponto = new Log_Token([
                    'id_user' => $user->id,
                    'token' => $token_sem,
                    'tipo' => $descricao,
                    'pontos' => 50
                ]);
                $insert_ponto->save();
                return response()->json(['message' => 'Token Válido!', 'pontos' => $user->pontos, 'code' => 200]);
            } else {
                return response()->json(['message' => 'Token Inválido!', 'code' => 300]);
            }
        }
    }


        public function sendpost(Request $request)
        {
            $feed = Feed::orderBy('id', 'desc')->get();
        }
  /*
        public function inscrever(Request $request)
        {
            $uuid = $request->only('id');
            $id_work = $request->only('id_work');
            $user = User::where('uuid', $uuid)->first();
            $workshop1 = Workshop::where('id', $id_work)->first();

            if ($user->workshopsInscritos()->get()->contains($workshop1) == false) {
                $user->workshopsInscritos()->attach($id_work);

                $x = $workshop1->spotsavailable;
                $y = 1;
                $workshop1->spotsavailable = $x - $y;
                $workshop1->save();
                return response()->json(['message' => 'Inscrito!', 'code' => 200]);
            } else {

                return response()->json(['message' => 'Já Inscrito!', 'code' => 200]);
            }
        }

        public function desinscrever(Request $request)
        {
            $uuid = $request->only('id');
            $id_work = $request->only('id_work');
            $user = User::where('uuid', $uuid)->first();
            $workshop1 = Workshop::where('id', $id_work)->first();

            $user->workshopsInscritos()->detach($id_work);
            $x = $workshop1->spotsavailable;
            $y = 1;
            $workshop1->spotsavailable = $x + $y;
            $workshop1->save();
            return response()->json(['message' => 'Desinscrito', 'code' => 200]);
        }

        public function jaisncrito(Request $request)
        {
            $uuid = $request->only('id');
            $id_work = $request->only('id_work');
            $user = User::where('uuid', $uuid)->first();
            $workshop1 = Workshop::where('id', $id_work)->first();

            return response()->json(['message' => $user->workshopsInscritos()->get()->contains($workshop1), 'code' => 200]);
        }
    */
    public function tokengame(Request $request)
    {
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);
        $uuid = $request->only('id');
        $toke = $request->only('token');
        $token = $toke['token'];

        $User = User::where('uuid', $uuid)->first();
        $log_pontos = Log_Token::where('id_user', $User->id)->where('token', $token)->first();
        $empresa_token = Tokens::where('token', $token)->first();

        $insert_ponto = new Log_Token;
        if (empty($empresa_token)) {
            return response()->json(['message' => 'Token Inválido!', 'code' => 300]);

        } else {
            //return $empresa_token;
            if (strcmp($empresa_token->token, $token) == 0 && strcmp($empresa_token->descricao, "jogo") == 0) {
                # code..
                if (!empty($log_pontos->token)) {
                    if (strcmp($log_pontos->token, $token) == 0) {

                        return response()->json(['message' => 'Token já Introduzido!', 'code' => 304]);
                    } else {
                        $empresa = Empresa::where('id', $empresa_token->id_empresa)->first();
                        $insert_ponto->id_user = $User->id;
                        $insert_ponto->token = $token;
                        $insert_ponto->tipo = $empresa_token->descricao;
                        $insert_ponto->save();
                        //Codigo invalido
                        if (strcmp($empresa->plano, "premium") == 0 || strcmp($empresa->plano, "diamond") == 0) {
                            $backofficealunosempresas = BackOfficeAlunosEmpresas::where('id_user', $User->id)->where('id_empresa', $empresa->id)->first();
                            if ($backofficealunosempresas == null) {
                                $backofficealunosempresas = new BackOfficeAlunosEmpresas;
                                $backofficealunosempresas->id_user = $User->id;
                                $backofficealunosempresas->id_empresa = $empresa->id;
                                $backofficealunosempresas->save();
                            }
                        }

                        return response()->json(['message' => 'Token válido!', 'plano' => $empresa->plano, 'code' => 200]);
                    }
                } else {
                    $empresa = Empresa::where('id', $empresa_token->id_empresa)->first();
                    $insert_ponto->id_user = $User->id;
                    $insert_ponto->token = $token;
                    $insert_ponto->tipo = $empresa_token->descricao;
                    $insert_ponto->save();
                    //Codigo invalido
                    if (strcmp($empresa->plano, "premium") == 0 || strcmp($empresa->plano, "diamond") == 0) {
                        $backofficealunosempresas = BackOfficeAlunosEmpresas::where('id_user', $User->id)->where('id_empresa', $empresa->id)->first();
                        if ($backofficealunosempresas == null) {
                            $backofficealunosempresas = new BackOfficeAlunosEmpresas;
                            $backofficealunosempresas->id_user = $User->id;
                            $backofficealunosempresas->id_empresa = $empresa->id;
                            $backofficealunosempresas->save();
                        }
                    }

                    return response()->json(['message' => 'Token válido!', 'plano' => $empresa->plano, 'code' => 200]);
                }
            } else {
                if (strcmp($empresa_token->token, $token) == 0) {
                    return response()->json(['message' => 'Insere o token na área do perfil!', 'code' => 300]);
                } else {
                    return response()->json(['message' => 'Token Inválido!', 'code' => 300]);
                }

            }
        }
    }

    public function pontosgame(Request $request)
    {
        $uuid = $request->only('id');
        $ponto = $request->only('pontos');
        $pontos = $ponto['pontos'];
        $toke = $request->only('token');
        $token = $toke['token'];

        $User = User::where('uuid', $uuid)->first();
        $log_pontos = Log_Token::where('id_user', $User->id)->where('token', $token)->first();
        $empresa_token = Tokens::where('token', $token)->first();
        $log_pontos->pontos = $pontos;
        $log_pontos->save();
        $User->pontos = $User->pontos + $pontos;
        $User->save();
        return response()->json(['message' => 'Fixe!', 'pontos' => $User->pontos, 'code' => 300]);
    }

    public function checkinTenda(Request $request)
    {
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);
        $uuid = $request->only('uuid')['uuid']; // Certifique-se de extrair corretamente o UUID do array
        $user = User::where('uuid', $uuid)->first();

        if (!$user) {
            return response()->json(['message' => 'Usuário não encontrado!', 'code' => 404]);
        }

        // Verifica o último check-in independente da data
        $lastCheckin = DB::table('check_in_tenda')
            ->where('id_user', $user->id)
            ->orderByDesc('created_at')
            ->first();

        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));

        if ($lastCheckin) {
            $lastCheckinDate = date('Y-m-d', strtotime($lastCheckin->created_at));

            if ($lastCheckinDate == $today) {
                return response()->json(['message' => 'Checkin já efetuado hoje!', 'nome' => $user->name, 'code' => 300]);
            } elseif ($lastCheckinDate == $yesterday) {
                // Se o último check-in foi ontem, permite fazer check-in hoje e informa sobre o check-in de ontem
                $checkin = new CheckInTenda;
                $checkin->id_user = $user->id;
                $checkin->save();
                $user->pontos += 200;
                $user->save();
                return response()->json([
                    'message' => 'Checkin feito com sucesso! Você também esteve aqui ontem.',
                    'nome' => $user->name,
                    'code' => 200
                ]);
            }
        }

        // Se não houve check-in ontem ou hoje, permite fazer check-in
        $checkin = new CheckInTenda;
        $checkin->id_user = $user->id;
        $checkin->save();
        $user->pontos += 200;
        $user->save();
        return response()->json(['message' => 'Checkin feito com sucesso!', 'nome' => $user->name, 'code' => 200]);
    }

    /*
        public function checkinWorkshop(Request $request)
        {
            $postInput = file_get_contents('php://input');
            $data = json_decode($postInput, true);
            $uuid = $request->only('uuid');
            $workshop = Workshop::where('id', $request->only('id_objeto'))->first();
            $user = User::where('uuid', $uuid)->first();
            $workshopInscritos = $user->workshopsInscritos()->get();
            $workshopPresentes = $user->workshopsPresentes()->get();
            $inscricao = false;
            $presenca = false;
            if ($workshopInscritos->contains($workshop->id) == true) {
                $inscricao = true;
            }
            if ($workshopPresentes->contains($workshop->id) == true) {
                $presenca = true;
            }
            if ($inscricao && !$presenca) {
                WorkshopPresenca::create([
                    'user_id' => $user->id,
                    'workshop_id' => $workshop->id,
                ]);
                $pontos = $user->pontos;
                $user->pontos = $pontos + 300;
                $user->save();
                return response()->json(['message' => 'Presença registada!', 'nome' => $user->first_name . ' ' . $user->last_name, 'code' => 200]);
            } else {
                if ($inscricao && $presenca) {
                    return response()->json(['message' => 'Já fez check-in no workshop!', 'nome' => $user->first_name . ' ' . $user->last_name, 'code' => 300]);
                } else {
                    if (!$inscricao) {
                        return response()->json(['message' => 'Não está inscrito no workshop!', 'nome' => $user->first_name . ' ' . $user->last_name, 'code' => 300]);
                    }
                }
            }
        }
    */
    public function checkinConferencia(Request $request)
    {
        $postInput = file_get_contents('php://input');
        $data = json_decode($postInput, true);
        $uuid = $request->only('uuid');
        $id_objeto = $request->only('id_objeto')['id_objeto'];
        $user = User::where('uuid', $uuid)->first();
        $checkinConferencia = CheckInConferencia::where('id_user', $user->id)->where('tipo', $id_objeto)->first();

        if ($checkinConferencia == null) {
            $checkin = new CheckInConferencia;
            $checkin->id_user = $user->id;
            $checkin->tipo = $id_objeto;
            $checkin->save();
            $pontos = $user->pontos;
            $user->pontos = $pontos + 200;
            $user->save();
            return response()->json(['message' => 'Checkin feito com sucesso!', 'nome' => $user->name, 'code' => 200]);
        } else {
            return response()->json(['message' => 'Checkin já efetuado!', 'nome' => $user->name, 'code' => 300]);
        }
    }
    /*
        public function checkinKeynote(Request $request)
        {
            $postInput = file_get_contents('php://input');
            $data = json_decode($postInput, true);
            $uuid = $request->only('uuid');
            $id_objeto = $request->only('id_objeto')['id_objeto'];
            $user = User::where('uuid', $uuid)->first();
            $checkinKeynote = CheckInKeynote::where('id_user', $user->id)->where('id_keynote', $id_objeto)->first();

            if ($checkinKeynote == null) {
                $checkin = new CheckInKeynote;
                $checkin->id_user = $user->id;
                $checkin->id_keynote = $id_objeto;
                $checkin->save();
                $pontos = $user->pontos;
                $user->pontos = $pontos + 200;
                $user->save();
                return response()->json(['message' => 'Checkin feito com sucesso!', 'nome' => $user->first_name . ' ' . $user->last_name, 'code' => 200]);
            } else {
                return response()->json(['message' => 'Checkin já efetuado!', 'nome' => $user->first_name . ' ' . $user->last_name, 'code' => 300]);
            }
        }

        public function getBackoffice(Request $request)
        {
            $postInput = file_get_contents('php://input');
            $data = json_decode($postInput, true);
            $uuid = $request->only('uuid');
            $user = User::where('uuid', $uuid)->first();
            $backoffice = BackOfficeAlunos::where('id_user', $user->id)->first();
            return response()->json(['message' => 'Certo!', 'backoffice' => $backoffice, 'code' => 200]);
        }

        public function guardarBackoffice(Request $request)
        {
            $postInput = file_get_contents('php://input');
            $data = json_decode($postInput, true);
            $uuid = $request->only('uuid');
            $user = User::where('uuid', $uuid)->first();
            $backoffice = BackOfficeAlunos::where('id_user', $user->id)->first();
            if (BackOfficeAlunos::where('id_user', $user->id)->first() == null) {
                $backoffice = new BackOfficeAlunos;
                $backoffice->id_user = $user->id;
            }
            $backoffice->email = $request->only('email')['email'];
            $backoffice->linkedin = $request->only('linkedin')['linkedin'];
            $backoffice->areainteresse1 = $request->only('areainteresse1')['areainteresse1'];
            $backoffice->areainteresse2 = $request->only('areainteresse2')['areainteresse2'];
            $backoffice->datanascimento = strval($request->only('datanascimento')['datanascimento']);
            $estagioverao = $request->only('estagioverao')['estagioverao'];
            $fulltime = $request->only('fulltime')['fulltime'];
            $parttime = $request->only('parttime')['parttime'];

            if (strcmp($estagioverao, "false") == 0) {
                $estagioverao = 0;
            } else {
                $estagioverao = 1;
            }

            if (strcmp($fulltime, "false") == 0) {
                $fulltime = 0;
            } else {
                $fulltime = 1;
            }

            if (strcmp($parttime, "false") == 0) {
                $parttime = 0;
            } else {
                $parttime = 1;
            }

            $backoffice->estagioverao = $estagioverao;
            $backoffice->fulltime = $fulltime;
            $backoffice->parttime = $parttime;
            if (BackOfficeAlunos::where('id_user', $user->id)->first() != null) {
                $backoffice->save();
            } else {
                if ($backoffice->save()) {
                    $pontos = $user->pontos;
                    $user->pontos = $pontos + 150;
                    $log = new Log_ponto();
                    $log->id_user = $user->id;
                    $log->token = 'upload';
                    $log->tipo = 'backoffice_app';
                    $log->pontos = 150;
                    $user->save();
                    $log->save();
                }
            }
            return response()->json(['message' => 'Certo!', 'backoffice' => $backoffice, 'code' => 200]);
        }
    */
    protected function create(array $data)
    {
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->pontos = '0';
        $user->password = Hash::make($data['password']);
        $user->save();
        return $user;
    }

    public function apagarConta(Request $request)
    {
        $id = $request->only('id');
        $user = User::where('uuid', $id)->first();

        if (!$user) {
            return response()->json(['message' => 'user não encontrado', 'code' => 404]);
        }
        /*
                $workshopsInscrito = WorkshopInscricoes::where('user_id', $user->id)->get();

                foreach ($workshopsInscrito as $workshopInscrito) {
                    $user->workshopsInscritos()->detach($workshopInscrito->id);
                    $workshop = Workshop::where('id', $workshopInscrito->workshop_id)->first();
                    $x = $workshop->spotsavailable;
                    $y = 1;
                    $workshop->spotsavailable = $x + $y;
                    $workshop->save();
                }
        */
        if ($user->id != 408) {
            $user->delete();
        }
        return response()->json(['message' => 'user apagado', 'code' => 200]);
    }

    // public function getWorkshopsInscritos(Request $request)
    // {
    //     $id = $request->only('id');
    //     $user = User::where('uuid', $id)->first();
    //     $workshopsInscrito = WorkshopInscricoes::where('user_id', $user->id)->get();
    //     foreach ($workshopsInscrito as $workshopInscrito) {
    //         $workshop = Workshop::where('id', $workshopInscrito->workshop_id)->first();
    //         $x = $workshop->spotsavailable;
    //         $y = 1;
    //         $workshop->spotsavailable = $x + $y;
    //         $workshop->save();

    //         $spots = $workshop->spotsavailable;
    //     }
    //     return response()->json(['message' => $spots]);
    // }
}
