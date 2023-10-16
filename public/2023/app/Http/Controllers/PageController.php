<?php

namespace App\Http\Controllers;

use App\BackOfficeAlunos;
use App\BackOfficeAlunosEmpresas;
use App\Billing;
use App\CheckInConferencia;
use App\CheckInKeynote;
use App\CheckInTenda;
use App\Conferencia;
use App\Contacts;
use App\Contest;
use App\Empresa;
use App\Empresas_anteriores;
use App\Feed;
use App\ItSpeedTalk;
use App\ItstSlots;
use App\Logistica;
use App\LogTrocaPontos;
use App\Log_ponto;
use App\Mailing;
use App\Mail\EmailCTF;
use App\Mail\EmailEmpresasA;
use App\Mail\EmailFinalEmpresas;
use App\Mail\EmailPacoteGrafico;
use App\Mail\EmailParticipacao;
use App\Mail\EmailPlanta;
use App\Mail\EmailRegistoEmpresa;
use App\Mail\EmailWorkshop;
use App\Mail\EmailPulseira;
use App\Matricula;
use App\Orador;
use App\Programas;
use App\Programas_anteriores;
use App\Questao;
use App\RespostasConcursoMat;
use App\Sorteio;
use App\SpeedInterviews;
use App\Tokens_ponto;
use App\User;
use App\Workshop;
use App\WorkshopPresenca;
use App\WorkshopSlots;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function send_email()
    {
        $i = 965;
        while ($i <= 1100) {
            $empresa = Mailing::where('id', $i)->first();
            $email = $empresa->mail_1;
            $name = $empresa->empresa;
            $token = $empresa->token;
            $enviar = $empresa->enviar;
            $email2 = $empresa->mail_2;
            $email3 = $empresa->mail_3;
            $email4 = $empresa->mail_4;
            $email5 = $empresa->mail_5;

            if (!empty($email)) {
                Mail::to($email)->send(new EmailEmpresasA($name));
                echo "Enviado para $email\n";
            }
            if (!empty($email2)) {
                Mail::to($email2)->send(new EmailEmpresasA($name));
                echo "Enviado para $email2\n";
            }
            if (!empty($email3)) {
                Mail::to($email3)->send(new EmailEmpresasA($name));
                echo "Enviado para $email3\n";
            }
            if (!empty($email4)) {
                Mail::to($email4)->send(new EmailEmpresasA($name));
                echo "Enviado para $email4\n";
            }
            if (!empty($email5)) {
                Mail::to($email5)->send(new EmailEmpresasA($name));
                echo "Enviado para $email5\n";
            }
            $i++;
        }
    }

    public function send_emailusers()
    {
        # code...
        for ($i = 1; $i <= 1001; $i++) {
            $user = User::where('id', $i)->first();
            if ($user != null) {
                $empresa = $user->empresa;
                if (empty($empresa)) {
                    $email = $user->email;
                    Mail::to($email)->send(new EmailEmpresasA($user));
                    echo "Enviado para $email,$user->first_name $user->last_name--\n";
                }
            } else {
                echo 'NAOENCONTRA';
            }
        }
    }

    public function send_emailW()
    {
        $workshop = Workshop::find(4);
        $nome_workshop = $workshop->title;
        $dia = date('d', strtotime($workshop->begin));
        $hora = date('H', strtotime($workshop->begin));
        $minuto = date('i', strtotime($workshop->begin));
        $num = 0;
        foreach ($workshop->usersInscritos as $user) {
            $email = $user->email;
            $nome_pessoa = $user->first_name;
            Mail::to($email)->send(new EmailWorkshop($user, $workshop));
            echo "Enviado para $email, $nome_pessoa, $nome_workshop\n";
            $num++;
        }
        echo $num;
    }

    public function send_emailEmpresas()
    {
        $empresas = DB::select('select * from empresas where cvs=0 and email is not null');
        $num = 0;
        foreach ($empresas as $empresa) {
            $email = $empresa->email;
            $nome_pessoa = $empresa->nome_user;
            Mail::to($email)->send(new EmailFinalEmpresas($empresa));
            echo "Enviado para $email, $nome_pessoa\n";
            echo '<br>';
            $num++;
        }
        echo $num;
    }

    public function send_emailParticipacao()
    {
        $users = DB::select('SELECT DISTINCT users.id,first_name,last_name,email FROM `check_in_tenda`,users WHERE users.empresa is null and id_user=users.id order by users.id asc');
        $i = 900;
        $num = 0;
        while ($i < 1000) {
            $email = $users[$i]->email;
            $user = $users[$i];
            Mail::to($email)->send(new EmailParticipacao($user));
            echo $user->first_name . ' ' . $user->last_name . ' ' . $user->email . '<br>';
            $i++;
            $num++;
        }
        echo $num;
    }

    public function send_emailPG()
    {
        $empresas = Empresa::all();
        $num = 0;
        foreach ($empresas as $empresa) {
            Mail::to($empresa->email)->send(new EmailPacoteGrafico($empresa));
            echo "Enviado para $empresa->email, $empresa->nome_user";
            $num++;
        }
        echo $num;
    }

    public function send_emailPlanta()
    {
        $empresas = Empresa::all();
        $num = 0;
        foreach ($empresas as $empresa) {
            Mail::to($empresa->email)->send(new EmailPlanta($empresa));
            echo "Enviado para $empresa->email, $empresa->nome_user";
            $num++;
        }
        echo $num;
    }

    public function send_emailCTF()
    {
        $concurso = Contest::where('tipo_concurso', 'CTF')->get();
        $num = 0;
        foreach ($concurso as $participante) {
            if ($participante->email1 != null) {
                Mail::to($participante->email1)->send(new EmailCTF($participante->nome1));
                echo "Enviado para $participante->email1, $participante->nome1";
                $num++;
            }
            if ($participante->email2 != null) {
                Mail::to($participante->email2)->send(new EmailCTF($participante->nome2));
                echo "Enviado para $participante->email2, $participante->nome2";
                $num++;
            }
            if ($participante->email3 != null) {
                Mail::to($participante->email3)->send(new EmailCTF($participante->nome3));
                echo "Enviado para $participante->email3, $participante->nome3";
                $num++;
            }
            if ($participante->email4 != null) {
                Mail::to($participante->email4)->send(new EmailCTF($participante->nome4));
                echo "Enviado para $participante->email4, $participante->nome4";
                $num++;
            }
        }
        echo $num;
    }

    public function tokenJogo(Request $request)
    {
        $token = new Tokens_ponto();

        $token->id_empresa = $request->id_empresa;
        $token->token = $request->token;
        $token->descricao = 'JOGO';
        $token->save();
        return redirect('/confirmacao');
    }

    public function pontosUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user->pontos_verify == 0) {
            $user->pontos_verify = 1;
            $user->pontos = $user->pontos + 400;
            $user->save();
            echo "<script>
													alert('Colocaste 400 pontos a $user->first_name $user->last_name ');
												</script>";
        } else {
            echo "<script>
													alert('Já tinhas colocado os 400 pontos a $user->first_name $user->last_name ');
												</script>";
        }
    }
    public function perguntas()
    {
        return view('perguntas');
    }

    public function verificar_email($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        if ($user->email_verified_at == null) {
            $user->email_verified_at = new DateTime();
            $user->save();
            echo "<script>
					alert('Verificado com sucesso!');
				</script>";
        } else {
            echo "<script>
					alert('Email já estava verificado!');
				</script>";
        }
        return redirect('/home');
    }

    public function uploadProjetoIdeias(Request $request)
    {
        $contest = Contest::where('id', $request->grupo_id)->first();
        if ($request->file('file')) {
            # code...
            $file = $request->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->file->storeAs('/concurso_ideias', $filename);
        }
        $contest->file = $filename;
        $contest->save();
        return redirect('/confirmacao');
    }

    public function submitBackOffice(Request $request)
    {
        $user = Auth::user();
        $backOffice = BackOfficeAlunos::where('id_user', $user->id)->first();
        echo $backOffice;

        if (BackOfficeAlunos::where('id_user', $user->id)->first() == null) {
            $backOffice = new BackOfficeAlunos;
            $backOffice->id_user = $user->id;
        }
        $backOffice->email = $request->email;
        $backOffice->linkedin = $request->linkedin;
        $backOffice->areainteresse1 = $request->areainteresse1;
        $backOffice->areainteresse2 = $request->areainteresse2;
        $backOffice->datanascimento = $request->datanascimento;
        if ($request->estagioverao == null) {
            $request->estagioverao = 0;
        }
        if ($request->fulltime == null) {
            $request->fulltime = 0;
        }
        if ($request->parttime == null) {
            $request->parttime = 0;
        }
        $backOffice->estagioverao = $request->estagioverao;
        $backOffice->fulltime = $request->fulltime;
        $backOffice->parttime = $request->parttime;
        if (BackOfficeAlunos::where('id_user', $user->id)->first() != null) {
            $backOffice->save();
        } else {
            if ($backOffice->save()) {
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

        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }

    public function getBackoffice()
    {
        if (Auth::user()->empresa != null && (strcmp(Empresa::where('id', Auth::user()->empresa)->first()->plano, 'premium') == 0 || strcmp(Empresa::where('id', Auth::user()->empresa)->first()->backoffice, 1) == 0 || strcmp(Empresa::where('id', Auth::user()->empresa)->first()->plano, 'diamond') == 0)) {
            $backofficealunos = BackOfficeAlunos::all();
            $backofficealunosempresas = BackOfficeAlunosEmpresas::all();
            $users = User::all();
            return view('back_office', ['backofficealunos' => $backofficealunos, 'backofficealunosempresas' => $backofficealunosempresas, 'users' => $users]);
        } else {
            return redirect()->route('homepage');
        }
    }

    public function exportarBackOffice()
    {
        $rows2 = DB::select('select CONCAT(users.first_name, " ", users.last_name) as nome, back_office_alunos.email, back_office_alunos.linkedin, back_office_alunos.areainteresse1, back_office_alunos.areainteresse2, back_office_alunos.estagioverao, back_office_alunos.fulltime, back_office_alunos.parttime, cursos.designacao as curso, anos.designacao as ano, back_office_alunos.datanascimento from back_office_alunos_empresas, back_office_alunos, users, cursos, anos where back_office_alunos_empresas.id_empresa=? and back_office_alunos_empresas.id_user=back_office_alunos.id_user and back_office_alunos.id_user=users.id and users.id_curso=cursos.id and users.id_ano=anos.id', [Auth::user()->empresa]);
        $rows3 = json_decode(json_encode($rows2), true);
        $rows = [];
        foreach ($rows3 as $row) {
            if ($row['estagioverao'] == 1) {
                $row['estagioverao'] = 'X';
            } else {
                $row['estagioverao'] = '';
            }
            if ($row['fulltime'] == 1) {
                $row['fulltime'] = 'X';
            } else {
                $row['fulltime'] = '';
            }
            if ($row['parttime'] == 1) {
                $row['parttime'] = 'X';
            } else {
                $row['parttime'] = '';
            }
            $rows[] = $row;
        }
        $keys = ['Nome', 'Email', 'LinkedIn', 'Área de Interesse 1', 'Área de Interesse 2', 'Estágio de Verão', 'Full-Time', 'Part-Time', 'Licenciatura', 'Ano', 'Data de Nascimento'];
        $formats = ['B' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER_00];

        $this->writeXLSX('back_office.xlsx', $rows, $keys, $formats);
    }

    public function writeXLSX($filename, $rows, $keys = [], $formats = [])
    {
        // instantiate the class
        $doc = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $doc->getActiveSheet();

        // $keys are for the header row.  If they are supplied we start writing at row 2
        if ($keys) {
            $offset = 2;
        } else {
            $offset = 1;
        }

        // write the rows
        $i = 0;
        foreach ($rows as $row) {
            $doc->getActiveSheet()->fromArray($row, null, 'A' . ($i++ + $offset));
        }

        // write the header row from the $keys
        if ($keys) {
            $doc->setActiveSheetIndex(0);
            $doc->getActiveSheet()->fromArray($keys, null, 'A1');
        }

        // get last row and column for formatting
        $last_column = $doc->getActiveSheet()->getHighestColumn();
        $last_row = $doc->getActiveSheet()->getHighestRow();

        // autosize all columns to content width
        for ($i = 'A'; $i <= $last_column; $i++) {
            $doc->getActiveSheet()
                ->getColumnDimension($i)
                ->setAutoSize(true);
        }

        // if $keys, freeze the header row and make it bold
        if ($keys) {
            $doc->getActiveSheet()->freezePane('A2');
            $doc->getActiveSheet()
                ->getStyle('A1:' . $last_column . '1')
                ->getFont()
                ->setBold(true);
        }

        // format all columns as text
        $doc->getActiveSheet()
            ->getStyle('A2:' . $last_column . $last_row)
            ->getNumberFormat()
            ->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_TEXT);
        if ($formats) {
            // if there are user supplied formats, set each column format accordingly
            // $formats should be an array with column letter as key and one of the PhpOffice constants as value
            // https://phpoffice.github.io/PhpSpreadsheet/1.2.1/PhpOffice/PhpSpreadsheet/Style/NumberFormat.html
            // EXAMPLE:
            // ['C' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER_00, 'D' => \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER_00]
            foreach ($formats as $col => $format) {
                $doc->getActiveSheet()
                    ->getStyle($col . $offset . ':' . $col . $last_row)
                    ->getNumberFormat()
                    ->setFormatCode($format);
            }
        }

        // write and save the file
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($doc);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');

        return redirect()->route('back_office');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = Auth::user();
        if ($request->file('avatar')) {
            Storage::delete($user->avatar);
            $file = $request->file('avatar');
            $filename = $user->id . time() . '.' . $file->getClientOriginalExtension();
            $request->avatar->storeAs('users', $filename);
            $user->avatar = 'users/' . $filename;
            $user->save();
        }
        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }

    public function pontosMAT(Request $request)
    {
        $id_grupo = $request->id_grupo;
        $contest = Contest::find($id_grupo);
        $contest->pontos = $contest->pontos + $request->pontos;
        $contest->save();
        echo "<script>
									alert('Pontos já inseridos!');
								</script>";
    }

    public function sorteio(Request $request)
    {
        $user = Auth::user();
        $todos = Sorteio::where('id_user', $user->id)->where('tipo', $request->tipo_sorteio)->get();
        $jogo = new Sorteio();
        if ($user->role_id != 29) {
            if (count($todos) == 0) {
                $jogo->nome = $user->first_name . ' ' . $user->last_name;
                $jogo->tipo = $request->tipo_sorteio;
                $jogo->id_user = $user->id;
                $jogo->save();
            }
        }
        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }

    public function resultadoSorteio(Request $request)
    {

        $concorrentes = Sorteio::where('tipo', $request->tipo_sorteio)->where('vencedor', 0)->get();
        $concorrentes2 = $concorrentes->shuffle();
        if ($concorrentes2->count() != 0) {
            $vencedor = $concorrentes2->random();
            $vencedor->vencedor = 1;
            $vencedor->save();
        }

        return view('resultadoSorteio', ['vencedor' => $vencedor]);
    }

    public function save(Request $req)
    {
        $user = User::where('uuid', Auth::user()->uuid)->first();
        $user->id_curso = $req->id_curso;
        $user->id_ano = $req->id_ano;
        $user->save();

        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }
    public function updatepass(Request $req)
    {
        $this->validate($req, [
            'password' => 'required|confirmed',
        ]);
        $user = User::where('uuid', Auth::user()->uuid)->first();
        $user->password = Hash::make($req->input('password'));
        $user->save();

        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }
    public function uploadcv(Request $request)
    {
        if (!empty($request->file('file'))) {
            $user = Auth::user();
            //se estiver vazio soma os pontos se tiver com ficheiro não soma mas altera o ficheiro existente
            if (empty(Auth::user()->file)) {
                $pontosint = intval(Auth::user()->pontos);
                $total = $pontosint + 1000;
                $log = new Log_ponto();
                $log->id_user = $user->id;
                $log->token = 'upload';
                $log->tipo = 'cv';
                $log->pontos = 1000;
                $user->pontos = strval($total);
                $log->save();

                if ($request->file('file')) {
                    $file = $request->file('file');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $request->file->storeAs('/curriculos', $filename);
                }
            } else {
                if ($request->file('file')) {
                    $file = $request->file('file');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $request->file->storeAs('/curriculos', $filename);
                    Storage::delete('curriculos/' . Auth::user()->file);
                }
            }
            $user->file = $filename;
            $user->save();
            return redirect()->route('minhaConta', [Auth::user()->uuid]);
        } else {
            return redirect()->route('minhaConta', [Auth::user()->uuid]);
        }
    }

    public function registarempresa(Request $request)
    {
        $request->validate([
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->day1 == null && $request->day2 == null) {
            return redirect('/registarEmpresa?type=' . $request->company_plan)
                ->withErrors(['day' => ["Escolha um dia para o pacote. Caso estejam todos esgotados por favor escolha outra pacote."]])
                ->withInput();
        }

        $empresa = new Empresa();
        $empresa->nome_empresa = $request->company_name;
        $empresa->pequena_descricao = $request->company_desc;
        $empresa->plano = $request->company_plan;
        $empresa->nome_user = $request->contact_name;
        $empresa->telemovel = $request->contact_number;
        $empresa->total = $request->price_simulation;
        $request->cvs == null ? ($empresa->cvs = 0) : ($empresa->cvs = $request->cvs);
        $request->workshop == null ? ($empresa->worshop = 0) : ($empresa->worshop = $request->workshop);
        $request->itspeedtalks == null ? ($empresa->itspeedtalks = 0) : ($empresa->itspeedtalks = $request->itspeedtalks);
        $request->backoffice == null ? ($empresa->backoffice = 0) : ($empresa->backoffice = $request->backoffice);
        $request->cocktail == null ? ($empresa->cocktail = 0) : ($empresa->cocktail = $request->cocktail);

        if ($request->company_plan == 'premium') {
            $empresa->plano_num = 2;
            $empresa->cvs = 1;
            $empresa->worshop = 1;
            $empresa->itspeedtalks = 1;
            $empresa->backoffice = 1;
        } elseif ($request->company_plan == 'gold') {
            $empresa->plano_num = 3;
            $empresa->cvs = 1;
            $empresa->cocktail = 0;
        } elseif ($request->company_plan == 'silver') {
            $empresa->plano_num = 4;
            $empresa->cocktail = 0;
            $empresa->itspeedtalks = 0;
        }
        $empresa->modelo_workshop = $request->workshop_option;
        $empresa->dia1 = $request->day1;
        $empresa->dia2 = $request->day2;
        $empresa->almocos_extra = $request->almoco_number;
        $empresa->email = $request->contact_email;
        $empresa->save();

        if (strcmp($empresa->plano, 'premium') == 0 || $empresa->worshop == 1) {
            $workshop = new Workshop();
            $workshop->company = $empresa->nome_empresa;
            $workshop->save();
        }

        $logistica = new Logistica();
        $logistica->id_empresa = $empresa->id;
        $logistica->save();

        $fatura = new Billing();
        $fatura->id_empresa = $empresa->id;
        $fatura->save();

        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $filename = $empresa->id . time() . '.' . $file->getClientOriginalExtension();
            $request->avatar->storeAs('/users/empresas', $filename);
            $empresa->avatar = 'users/empresas/' . $filename;
        }

        $empresa->save();
        $emailsend = $request->contact_email;

        $empresfind = Empresa::where('nome_empresa', $request->company_name)->first();
        Mail::to($emailsend)->send(new EmailRegistoEmpresa($empresa->nome_empresa, $empresa->plano, $empresa->total));
        return redirect()->route('registerempresassite', ['empresa' => $empresfind->id, 'invite' => '']);
    }
    public function updatelinkedin(Request $request)
    {
        $user = Auth::user();
        $user->linkedin = $request->linkedin;
        $user->save();
        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }

    public function updateEmpresas(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $user = Auth::user();
        $empresa = Empresa::where('id', $user->empresa)->first();
        if ($request->file('avatar')) {
            # code...
            $file = $request->file('avatar');
            $filename = $empresa->id . time() . '.' . $file->getClientOriginalExtension();
            $request->avatar->storeAs('/users/empresas', $filename);
        }
        $empresa->avatar = 'users/empresas/' . $filename;
        $empresa->save();
        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }

    public function updateFatura(Request $request)
    {
        $fatura = Billing::where('id', $request->idFaturacao)->first();

        $user = Auth::user();
        $empresa = Empresa::where('id', $user->empresa)->first();
        $fatura->nome_fiscal = $request->nome_fiscal;
        $fatura->nif = $request->nif;
        $fatura->morada = $request->morada;
        $fatura->indicacao = $request->descricao;
        $fatura->id_empresa = $empresa->id;
        $fatura->save();
        return redirect('/confirmacao2');
    }

    public function updateInfoEmpresa(Request $request)
    {
        $empresa = Empresa::where('id', $request->idEmpresa)->first();
        $user = Auth::user();
        $empresa->pequena_descricao = $request->descricao;
        $empresa->link = $request->link;
        $empresa->save();
        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }

    public function token_empresas(Request $request)
    {
        $log_pontos = Log_ponto::where('id_user', Auth::user()->id)
            ->where('token', $request->token)
            ->first();
        $empresa_token = Tokens_ponto::where('token', $request->token)->first();
        $insert_ponto = new Log_ponto();

        if (empty($empresa_token)) {
            echo "<script>
													alert('Token inválido!');
												</script>";
        } else {
            if (strcmp($empresa_token->descricao, 'jogo') !== 0) {
                // echo "<script>
                //     alert('Token empresa!')
                // </script>";
                //return $empresa_token;
                if (strcmp($empresa_token->token, $request->token) == 0) {
                    # code..
                    if (!empty($log_pontos->token)) {
                        if (strcmp($log_pontos->token, $request->token) == 0) {
                            echo "<script>
																													alert('Token já introduzido!');
																												</script>";
                        } else {
                            $insert_ponto->id_user = Auth::user()->id;
                            $insert_ponto->token = $request->token;
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
                        $insert_ponto->token = $request->token;
                        $insert_ponto->tipo = $empresa_token->descricao;
                        $insert_ponto->pontos = $empresa_token->pontos;
                        $insert_ponto->save();
                        //Codigo invalido
                        $user = Auth::user();
                        $pontosint = Auth::user()->pontos;
                        $total = $pontosint + $empresa_token->pontos;
                        $user->pontos = $total;
                        $user->save();
                        if ($user->pontos == 0) {
                            echo "<script>
																													alert('O Token já não está válido!');
																												</script>";
                        }

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
                $questoes = Questao::where('id_empresa', $id_empres)->get();
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

    public function jogoBack(Request $request)
    {
        $q1R = $request->resposta_pergunta1;
        $q2R = $request->resposta_pergunta2;
        $idQ1 = $request->q1;
        $idQ2 = $request->q2;
        $user = Auth::user();
        $questao1 = Questao::find($idQ1);
        $questao2 = Questao::find($idQ2);
        $log_pontos = Log_ponto::where('id_user', Auth::user()->id)
            ->where('token', $request->token)
            ->first();
        $insert_ponto = new Log_ponto();

        if (empty($log_pontos->token)) {
            $insert_ponto->id_user = Auth::user()->id;
            $insert_ponto->token = $request->token;
            $insert_ponto->tipo = 'JOGO';

            if (strcmp($questao1->alinea_correta, $q1R) == 0 && strcmp($questao2->alinea_correta, $q2R) == 0) {
                $user->pontos = $user->pontos + 50;
                $user->save();
                $insert_ponto->pontos = 50;
            } elseif (strcmp($questao1->alinea_correta, $q1R) == 0 || strcmp($questao2->alinea_correta, $q2R) == 0) {
                $user->pontos = $user->pontos + 25;
                $user->save();
                $insert_ponto->pontos = 25;
            } else {
                $insert_ponto->pontos = 0;
            }
            $insert_ponto->save();
        }
        return redirect()->route('minhaConta', [Auth::user()->uuid]);
    }
    public function jogo()
    {
        return view('jogo');
    }

    public function store_contacts()
    {
        $contact = new Contacts();
        $contact->nome = request('name');
        $contact->email = request('email');
        $contact->assunto = request('subject');
        $contact->mensagem = request('message');

        $contact->save();

        return redirect('/contactsAccepted');
    }

    public function concurso_ideias(Request $request)
    {
        $concurso_ideias = new Contest();
        $concurso_ideias->nome_grupo = $request->nome_grupo;
        $concurso_ideias->nome1 = $request->nome1;
        $concurso_ideias->email1 = $request->email1;
        $concurso_ideias->curso1 = $request->curso1;
        $concurso_ideias->nome2 = $request->nome2;
        $concurso_ideias->email2 = $request->email2;
        $concurso_ideias->curso2 = $request->curso2;
        $concurso_ideias->nome3 = $request->nome3;
        $concurso_ideias->email3 = $request->email3;
        $concurso_ideias->curso3 = $request->curso3;
        $concurso_ideias->tipo_concurso = 'IDEIAS';

        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();

        $request->file->storeAs('/concurso-ideias', $filename);

        $concurso_ideias->file = '/concurso-ideias/' . $filename;

        $concurso_ideias->save();

        return redirect('/confirmacao');
    }

    public function concurso_matematica(Request $request)
    {
        $concurso_matematica = new Contest();
        $concurso_matematica->nome_grupo = $request->nomeGrupo;
        $concurso_matematica->nome1 = $request->nome1;
        $concurso_matematica->email1 = $request->email1;
        $concurso_matematica->curso1 = $request->curso1;
        $concurso_matematica->nome2 = $request->nome2;
        $concurso_matematica->email2 = $request->email2;
        $concurso_matematica->curso2 = $request->curso2;
        $concurso_matematica->nome3 = $request->nome3;
        $concurso_matematica->email3 = $request->email3;
        $concurso_matematica->curso3 = $request->curso3;
        $concurso_matematica->nome4 = $request->nome4;
        $concurso_matematica->email4 = $request->email4;
        $concurso_matematica->curso4 = $request->curso4;
        $concurso_matematica->tipo_concurso = 'MAT';
        $concurso_matematica->save();
        return redirect('/confirmacao');
    }

    public function concurso_ciberseguranca(Request $request)
    {
        $concurso_ciberseguranca = new Contest();
        $concurso_ciberseguranca->nome1 = $request->nome1;
        $concurso_ciberseguranca->email1 = $request->email1;
        $concurso_ciberseguranca->curso1 = $request->curso1;
        $concurso_ciberseguranca->nome2 = $request->nome2;
        $concurso_ciberseguranca->email2 = $request->email2;
        $concurso_ciberseguranca->curso2 = $request->curso2;
        $concurso_ciberseguranca->nome3 = $request->nome3;
        $concurso_ciberseguranca->email3 = $request->email3;
        $concurso_ciberseguranca->curso3 = $request->curso3;
        $concurso_ciberseguranca->tipo_concurso = 'CTF';
        $concurso_ciberseguranca->save();

        return redirect('/confirmacao');
    }

    public function corrida_cursos()
    {
        $userLEI = User::where('id_curso', '1')->whereNotNull('email_verified_at')->get();
        $userIGE = User::where('id_curso', '2')->whereNotNull('email_verified_at')->get();
        $userETI = User::where('id_curso', '3')->whereNotNull('email_verified_at')->get();
        $userCD = User::where('id_curso', '4')->whereNotNull('email_verified_at')->get();
        $userARQ = User::where('id_curso', '5')->whereNotNull('email_verified_at')->get();
        $LEI = count($userLEI);
        $IGE = count($userIGE);
        $ETI = count($userETI);
        $CD = count($userCD);
        $ARQ = count($userARQ);
        $total = $LEI + $IGE + $ETI + $CD + $ARQ;
        $users = [
            'Lei' => $LEI,
            'Ige' => $IGE,
            'Eti' => $ETI,
            'Cd' => $CD,
            'Arq' => $ARQ,
            'total' => $total,
        ];
        return view('corridaDeCursos', ['data' => $users]);
    }

    public function presenca_work(Request $request)
    {
        $uuid = $request->uuid;
        $presenca = $request->presenca;
        $workshop1 = Workshop::find($request->id_work);
        $user = User::where('uuid', $uuid)->first();
        if ($presenca == 0) {
            $user->pontos = $user->pontos - 200;
            $user->save();

            echo "<script>
													alert('Retirados 200 pontos a $user->first_name');
												</script>";
        } else {
            if (
                $user
                ->workshopsPresentes()
                ->get()
                ->contains($workshop1) == false
            ) {
                $user->workshopsPresentes()->attach($request->id_work);
                $user->pontos = $user->pontos + 300;
                $user->save();
                echo "<script>
																	alert('Adicionados 300 pontos a $user->first_name');
																</script>";
            } else {
                echo "<script>
																	alert('Já Foram adicionados!');
																</script>";
            }
        }
    }

    public function show_empresas()
    {
        $empDiamond = Empresa::where('plano', 'diamond')
            ->whereNotNull('avatar')
            ->get();
        $empPremium = Empresa::where('plano', 'premium')
            ->whereNotNull('avatar')
            ->get();
        $empGold = Empresa::where('plano', 'gold')
            ->whereNotNull('avatar')
            ->get();
        $empSilver = Empresa::where('plano', 'silver')
            ->whereNotNull('avatar')
            ->get();
        $empresas = [
            'diamond' => $empDiamond,
            'premium' => $empPremium,
            'gold' => $empGold,
            'silver' => $empSilver,
        ];
        return view('empresas', ['dataEmp' => $empresas]);
    }

    public function resumo_2022()
    {
        $empDiamond = Empresas_anteriores::where('plano', 'diamond')
            ->whereNotNull('avatar')
            ->get();
        $empPremium = Empresas_anteriores::where('plano', 'premium')
            ->whereNotNull('avatar')
            ->get();
        $empGold = Empresas_anteriores::where('plano', 'gold')
            ->whereNotNull('avatar')
            ->get();
        $empSilver = Empresas_anteriores::where('plano', 'silver')
            ->whereNotNull('avatar')
            ->get();
        $empresas = [
            'diamond' => $empDiamond,
            'premium' => $empPremium,
            'gold' => $empGold,
            'silver' => $empSilver,
        ];

        $programas = Programas_anteriores::all()->sortBy('horaInicio');

        foreach ($programas as $programa) {
            $dias[] = $programa->dia;
        }

        $dias = array_unique($dias);
        usort($dias, function ($time1, $time2) {
            if (strtotime($time1) > strtotime($time2)) {
                return 1;
            } elseif (strtotime($time1) < strtotime($time2)) {
                return -1;
            } else {
                return 0;
            }
        });

        foreach ($dias as $dia) {
            if (date('d') == date('d', strtotime($dia))) {
                $activeDia = date('d', strtotime($dia));
                break;
            } else {
                $activeDia = date('d', strtotime($dias[0]));
            }
        }
        return view('resumo2022', ['dataEmp' => $empresas, 'dias' => $dias, 'activeDia' => $activeDia, 'programas' => $programas]);
    }

    public function workshopempresainscrever(Request $request)
    {
        $workshopEmpresa = Workshop::where('id', $request->idWorkshop)->first();
        $user = Auth::user();
        $empresa = Empresa::where('id', $user->empresa)->first();

        if ($request->slot == null) {
            $slot = WorkshopSlots::where('empresa_id', $user->empresa)->first();
        } else {
            $slot = WorkshopSlots::where('id', $request->slot)->first();
        }
        $workshopEmpresa->title = $request->titulo;
        $workshopEmpresa->description = $request->descricao;
        $workshopEmpresa->plan = $request->plano;
        $workshopEmpresa->purpose = $request->observaçao;
        $workshopEmpresa->requirements = $request->requisitos;
        if ($workshopEmpresa->slot_id == null) {
            $workshopEmpresa->slot_id = $request->slot;
        }
        if ($workshopEmpresa->begin == null && $workshopEmpresa->end == null) {
            $workshopEmpresa->begin = $slot->begin;
            $workshopEmpresa->end = $slot->end;
        }
        if ($workshopEmpresa->tempo == null) {
            $workshopEmpresa->tempo = $request->time;
        }

        $workshopEmpresa->company = $empresa->nome_empresa;
        if ($workshopEmpresa->atendees == null) {
            $workshopEmpresa->spotsavailable = $request->participantes;
        }
        $workshopEmpresa->atendees = $request->participantes;
        $workshopEmpresa->save();

        if ($slot->empresa_id == null) {
            $slot->empresa_id = $user->empresa;
        }
        $slot->save();

        if ($request->file('imagemWorkshop')) {
            $file = $request->file('imagemWorkshop');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->imagemWorkshop->storeAs('/users/workshops', $filename);
            $workshopEmpresa->image = '/users/workshops/' . $filename;
            $workshopEmpresa->save();
        }

        return redirect('/confirmacao');
    }

    public function itspeedtalkempresainscrever(Request $request)
    {
        if ($request->idItSpeedTalk) {
            $itspeedtalk = ItSpeedTalk::where('id', $request->idItSpeedTalk)->first();
        } else {
            $itspeedtalk = new ItSpeedTalk();
        }

        if ($request->idOrador) {
            $orador = Orador::where('id', $request->idOrador)->first();
        } else {
            $orador = new Orador();
        }

        if ($request->slot) {
            $itstslot = ItstSlots::where('id', $request->slot)->first();
        } else {
            $itstslot = ItstSlots::where('id', $itspeedtalk->slot_id)->first();
        }

        $user = Auth::user();
        $empresa = Empresa::where('id', $user->empresa)->first();

        $orador->nome = $request->nomeOrador;
        $orador->bio = $request->bioOrador;
        $orador->url = $request->urlOrador;
        $orador->cargo = $request->cargoOrador;
        $orador->idEmpresa = $empresa->id;
        $orador->save();

        $itspeedtalk->id_empresa = $empresa->id;
        $itspeedtalk->id_orador = $orador->id;
        $itspeedtalk->titulo = $request->titulo;
        $itspeedtalk->descricao = $request->descricao;
        $itspeedtalk->slot_id = $itstslot->id;
        $itspeedtalk->save();

        $itstslot->id_empresa = $empresa->id;
        $itstslot->save();

        if ($request->file('imagemItSpeedTalk')) {
            $file = $request->file('imagemItSpeedTalk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->imagemItSpeedTalk->storeAs('/users/itspeedtalks', $filename);
            $itspeedtalk->imagem = '/users/itspeedtalks/' . $filename;
            $itspeedtalk->save();
        }

        if ($request->file('imagemOrador')) {
            $file = $request->file('imagemOrador');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->imagemOrador->storeAs('/users/oradores', $filename);
            $orador->imagem = '/users/oradores/' . $filename;
            $orador->save();
        }

        return redirect('/confirmacao');
    }

    public function get_oradores()
    {
        $oradores = Orador::all();
        $empresas = Empresa::all();
        $vect = ['oradores' => $oradores, 'empresas' => $empresas];
        return view('orador', ['vector' => $vect]);
    }
    public function get_conferencias()
    {
        $conferencias = Conferencia::where('tipo', 'conferencia_tecnologia')->get();
        $conferencias2 = Conferencia::where('tipo', 'conferencia_arquitetura')->get();
        return view('conferencias', ['conferencia_tecnologia' => $conferencias, 'conferencia_arquitetura' => $conferencias2]);
    }
    public function userclassificacao()
    {
        $users = User::where('pontos', '>=', '100')
            ->orderBy('pontos', 'desc')
            ->get();
        return view('classificacao', ['users' => $users]);
    }

    public function feedem(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|min:5',
            'descricao' => 'required',
            'file' => 'required',
        ]);

        $user = Auth::user();
        $data = new DateTime();
        $posts = DB::select('select * from feeds where DATE_FORMAT(created_at, "%Y-%m")=? and id_empresa=?', [$data->format('Y-m'), $user->empresa]);

        $empresa = Empresa::where('id', $user->empresa)->first();
        $numPosts = 0;
        if (strcmp($empresa->plano, 'silver') == 0) {
            $numPosts = 1;
        } elseif (strcmp($empresa->plano, 'gold') == 0) {
            $numPosts = 3;
        } elseif (strcmp($empresa->plano, 'premium') == 0) {
            $numPosts = 5;
        } elseif (strcmp($empresa->plano, 'diamond') == 0) {
            $numPosts = 10;
        }
        echo $numPosts;
        if (count($posts) < $numPosts) {
            $feedone = new Feed();
            $feedone->titulo = $request->titulo;
            $feedone->descricao = $request->descricao;
            $feedone->link_post = $request->link;
            $feedone->id_empresa = $user->empresa;
            $files = $request->file('file');
            $filename = time() . '.' . $files[0]->getClientOriginalExtension();
            $files[0]->storeAs('/users/empresas/posts', $filename);
            $feedone->avatar1 = 'users/empresas/posts/' . $filename;
            if (isset($files[1])) {
                $file22 = $user->empresa . time() . '.' . $files[1]->getClientOriginalExtension();
                $files[1]->storeAs('/users/empresas/posts', $file22);
                $feedone->avatar2 = 'users/empresas/posts/' . $file22;
            }

            $feedone->save();
            return redirect('/home')->with('sucess', 'Post publicado com sucesso!');
        } else {
            return redirect('/home')->with('danger', 'Atingiu o número limite de posts no mês!');
        }
    }

    public function checkinWorkshop(Request $request)
    {
        $user = User::where('email', $request->emailUser)->first();
        $workshopInscritos = $user->workshopsInscritos()->get();
        $workshopPresentes = $user->workshopsPresentes()->get();
        $inscricao = false;
        $presenca = false;
        if ($workshopInscritos->contains($request->workshop) == true) {
            $inscricao = true;
        }
        if ($workshopPresentes->contains($request->workshop) == true) {
            $presenca = true;
        }
        if ($inscricao && !$presenca) {
            //marcar presença no workshop
            WorkshopPresenca::create([
                'user_id' => $user->id,
                'workshop_id' => $request->workshop,
            ]);
            $pontos = $user->pontos;
            $user->pontos = $pontos + 300;
            $log = new Log_ponto();
            $log->id_user = $user->id;
            $log->token = 'check_in';
            $log->tipo = 'workshop - '+$workshop_id;
            $log->pontos = 300;
            $user->save();
            $log->save();
            echo "<script>
													alert('Presença registada!')
												</script>";
        } else {
            if ($inscricao && $presenca) {
                echo "<script>
																	alert('Já fez check-in no workshop!')
																</script>";
            } else {
                if (!$inscricao) {
                    echo "<script>
																					alert('Não está inscrito no workshop!')
																				</script>";
                }
            }
        }
    }

    public function check_in_conferencia(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $checkinConferencia = CheckInConferencia::where('id_user', $user->id)
            ->where('tipo', $request->tipo_conferencia)
            ->first();

        if ($checkinConferencia == null) {
            $checkin = new CheckInConferencia();
            $checkin->id_user = $user->id;
            $checkin->tipo = $request->tipo_conferencia;
            $checkin->save();
            $log = new Log_ponto();
            $log->id_user = $user->id;
            $log->token = 'check_in';
            $log->tipo = 'conferencia';
            $log->pontos = 200;
            $pontos = $user->pontos;
            $user->pontos = $pontos + 200;
            $user->save();
            $log->save();
            echo "<script>
													alert('Check-in feito com sucesso!')
												</script>";
        } else {
            echo "<script>
													alert('Checkin já efetuado!')
												</script>";
        }
    }

    public function check_in_tenda(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $checkinTenda = DB::select('select * from check_in_tenda where id_user=? and DATE_FORMAT(created_at, "%Y-%m-%d")=?', [$user->id, date('Y-m-d')]);

        if ($checkinTenda == null) {
            $checkin = new CheckInTenda();
            $checkin->id_user = $user->id;
            $checkin->save();
            $log = new Log_ponto();
            $log->id_user = $user->id;
            $log->token = 'check_in';
            $log->tipo = 'tenda';
            $log->pontos = 200;
            $pontos = $user->pontos;
            $user->pontos = $pontos + 200;
            $user->save();
            $log->save();
            echo "<script>
													alert('Checkin feito com sucesso!');
												</script>";
        } else {
            echo "<script>
													alert('Checkin já efetuado!');
												</script>";
        }
    }

    public function check_in_keynote(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $checkinKeynote = CheckInKeynote::where('id_user', $user->id)
            ->where('id_keynote', $request->id_keynote)
            ->first();

        if ($checkinKeynote == null) {
            $checkin = new CheckInKeynote();
            $checkin->id_user = $user->id;
            $checkin->id_keynote = $request->id_keynote;
            $checkin->save();
            $log = new Log_ponto();
            $log->id_user = $user->id;
            $log->token = 'check_in';
            $log->tipo = 'keynote';
            $log->pontos = 200;
            $pontos = $user->pontos;
            $user->pontos = $pontos + 200;
            $user->save();
            $log->save();
            echo "<script>
													alert('Checkin feito com sucesso!');
												</script>";
        } else {
            echo "<script>
													alert('Checkin já efetuado!');
												</script>";
        }
    }

    public function submeterRespostasConcMat(Request $request)
    {
        $grupo = Contest::where('id', $request->idGrupo)->first();
        $pergunta1 = RespostasConcursoMat::where('id_grupo', $grupo->id)
            ->where('num_pergunta', 1)
            ->first();
        $pergunta2 = RespostasConcursoMat::where('id_grupo', $grupo->id)
            ->where('num_pergunta', 2)
            ->first();
        $pergunta3 = RespostasConcursoMat::where('id_grupo', $grupo->id)
            ->where('num_pergunta', 3)
            ->first();
        $pergunta4 = RespostasConcursoMat::where('id_grupo', $grupo->id)
            ->where('num_pergunta', 4)
            ->first();

        if ($request->pergunta1 != null && strcmp($request->pergunta1, '') != 0) {
            if ($pergunta1 == null) {
                $pergunta1 = new RespostasConcursoMat();
                $pergunta1->id_grupo = $grupo->id;
                $pergunta1->num_pergunta = 1;
            }
            $pergunta1->resposta = $request->pergunta1;
            $pergunta1->save();
        }
        if ($request->pergunta2 != null && strcmp($request->pergunta2, '') != 0) {
            if ($pergunta2 == null) {
                $pergunta2 = new RespostasConcursoMat();
                $pergunta2->id_grupo = $grupo->id;
                $pergunta2->num_pergunta = 2;
            }
            $pergunta2->resposta = $request->pergunta2;
            $pergunta2->save();
        }
        if ($request->pergunta3 != null && strcmp($request->pergunta3, '') != 0) {
            if ($pergunta3 == null) {
                $pergunta3 = new RespostasConcursoMat();
                $pergunta3->id_grupo = $grupo->id;
                $pergunta3->num_pergunta = 3;
            }
            $pergunta3->resposta = $request->pergunta3;
            $pergunta3->save();
        }
        if ($request->pergunta4 != null && strcmp($request->pergunta4, '') != 0) {
            if ($pergunta4 == null) {
                $pergunta4 = new RespostasConcursoMat();
                $pergunta4->id_grupo = $grupo->id;
                $pergunta4->num_pergunta = 4;
            }
            $pergunta4->resposta = $request->pergunta4;
            $pergunta4->save();
        }
    }

    public function concurso_mat($codigo)
    {
        $grupo = Contest::where('codigo_secreto', $codigo)->first();
        if ($grupo == null) {
            return view('no_access');
        }

        return view('concurso', ['grupo' => $grupo]);
    }

    public function submit_mat(Request $request)
    {
        $grupo = Contest::where('id', $request->idGrupo)->first();

        $pergunta = new RespostasConcursoMat();
        $pergunta->id_grupo = $grupo->id;
        $pergunta->num_pergunta = $request->idPergunta;
        $pergunta->resposta = $request->resposta;
        $pergunta->save();

        return view('concurso', ['grupo' => $grupo]);
    }

    public function avaliarMat(Request $request)
    {
        $resposta = RespostasConcursoMat::where('id', $request->resposta_id)->first();
        $grupo = Contest::where('id', $resposta->id_grupo)->first();

        $pontos = $grupo->pontos;
        if ($request->avaliacao == "certo") {
            if ($resposta->num_pergunta == 1) {
                $grupo->pontos = $pontos + 1;
            }
            if ($resposta->num_pergunta == 2) {
                $grupo->pontos = $pontos + 2;
            }
            if ($resposta->num_pergunta == 3) {
                $grupo->pontos = $pontos + 3;
            }
            if ($resposta->num_pergunta == 4) {
                $grupo->pontos = $pontos + 4;
            }
            $resposta->certo_errado = 1;
        } else {
            $resposta->certo_errado = 0;
        }
        $grupo->save();
        $resposta->save();

        return back();
    }

    public function get_programa()
    {
        $programas = Programas::all()->sortBy('horaInicio');

        foreach ($programas as $programa) {
            $dias[] = $programa->dia;
        }

        $dias = array_unique($dias);
        usort($dias, function ($time1, $time2) {
            if (strtotime($time1) > strtotime($time2)) {
                return 1;
            } elseif (strtotime($time1) < strtotime($time2)) {
                return -1;
            } else {
                return 0;
            }
        });

        foreach ($dias as $dia) {
            if (date('d') == date('d', strtotime($dia))) {
                $activeDia = date('d', strtotime($dia));
                break;
            } else {
                $activeDia = date('d', strtotime($dias[0]));
            }
        }
        return view('programa', ['dias' => $dias, 'activeDia' => $activeDia, 'programas' => $programas]);
    }

    public function get_programa_it()
    {
        $empresas = Empresa::all();
        $itspeedtalks = ItSpeedTalk::all()->sortBy('horaInicio');

        foreach ($itspeedtalks as $itspeedtalk) {
            if ($itspeedtalk->dia != '0000-00-00' && $itspeedtalk->dia != null) {
                $dias[] = $itspeedtalk->dia;
            }
        }
        $dias = array_unique($dias);

        if ($dias > 1) {
            usort($dias, function ($time1, $time2) {
                if (strtotime($time1) > strtotime($time2)) {
                    return 1;
                } elseif (strtotime($time1) < strtotime($time2)) {
                    return -1;
                } else {
                    return 0;
                }
            });
        }

        foreach ($dias as $dia) {
            if (date('d') == date('d', strtotime($dia))) {
                $activeDia = date('d', strtotime($dia));
                break;
            } else {
                $activeDia = date('d', strtotime($dias[0]));
            }
        }
        return view('programa_it', ['dias' => $dias, 'activeDia' => $activeDia, 'itspeedtalks' => $itspeedtalks, 'empresas' => $empresas]);
    }

    public function troca_pontos(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user == null) {
            echo "<script>
													alert('Email incorreto!')
												</script>";
            return;
        }
        $logs = LogTrocaPontos::where('id_user', $user->id)->get();
        $pontosUsados = 0;
        $pulseira = 0;
        $pack = 0;
        foreach ($logs as $log) {
            $pontosUsados = $pontosUsados + $log->pontos;
            if (strcmp($log->tipo, 'pulseira') == 0) {
                $pulseira = 1;
            }
            if (strcmp($log->tipo, 'pack') == 0) {
                $pack = 1;
            }
        }
        if (
            $request->pulseira_checkbox == 1 &&
            LogTrocaPontos::where('tipo', 'pulseira')
            ->get()
            ->count() >= 190
        ) {
            echo "<script>
													alert('Pulseiras esgotadas!')
												</script>";
            return;
        }
        if (
            $request->pack_checkbox == 1 &&
            LogTrocaPontos::where('tipo', 'pack')
            ->get()
            ->count() >= 10
        ) {
            echo "<script>
													alert('Packs esgotados!')
												</script>";
            return;
        }
        if ($pack == 1 || $pulseira == 1) {
            echo "<script>
													alert('Não pode trocar mais nada!')
												</script>";
            return;
        } else {
            $pontosASerUsados = $pontosUsados;
            if ($request->pulseira_checkbox == 1) {
                $pontosASerUsados = $pontosASerUsados + 5500;
            }
            if ($request->pack_checkbox == 1) {
                $pontosASerUsados = $pontosASerUsados + 7000;
            }
            if ($user->pontos >= $pontosASerUsados) {
                if ($request->pulseira_checkbox == 1) {
                    $logPulseira = new LogTrocaPontos();
                    $logPulseira->id_user = $user->id;
                    $logPulseira->telemovel = $request->telemovel;
                    $logPulseira->pontos = 5500;
                    $logPulseira->tipo = 'pulseira';
                    $logPulseira->save();
                }
                if ($request->pack_checkbox == 1) {
                    $logPack = new LogTrocaPontos();
                    $logPack->id_user = $user->id;
                    $logPack->telemovel = $request->telemovel;
                    $logPack->pontos = 7000;
                    $logPack->tipo = 'pack';
                    $logPack->save();
                }
                echo "<script>
																	alert('Feito com sucesso!')
																</script>";
            } else {
                echo "<script>
																	alert('Não tem pontos suficientes! Pontos: $user->pontos')
																</script>";
            }
        }
    }

    public function get_logistica()
    {
        if (!Auth::user()) {
            return view('no_access');
        } else if (Auth::user()->empresa == null) {
            return view('no_access');
        } else {
            return view('logistica');
        }
    }

    public function post_logistica8(Request $request)
    {
        $logistica = Logistica::where('id_empresa', Auth::user()->empresa)->first();

        if ($request->cadeiras != null) {
            $logistica->cadeiras8 = $request->cadeiras;
        }

        if ($request->montagens8 != null) {
            $contmont8 = Logistica::where('montagem_id8', $request->montagens8)->count();
            if ($contmont8 < 7) {
                $logistica->montagem_id8 = $request->montagens8;
            }
        }

        if ($request->desmontagens8 != null) {
            $logistica->desmontagem_id8 = $request->desmontagens8;
        }

        $logistica->save();

        return redirect('logistica');
    }
    public function post_logistica9(Request $request)
    {
        $logistica = Logistica::where('id_empresa', Auth::user()->empresa)->first();

        if ($request->cadeiras != null) {
            $logistica->cadeiras9 = $request->cadeiras;
        }

        if ($request->montagens9 != null) {
            $contmont9 = Logistica::where('montagem_id8', $request->montagens9)->count();
            if ($contmont9 < 7) {
                $logistica->montagem_id9 = $request->montagens9;
            }
        }

        if ($request->desmontagens9 != null) {
            $logistica->desmontagem_id9 = $request->desmontagens9;
        }

        $logistica->save();

        return redirect('logistica');
    }

    public function post_matricula(Request $request)
    {
        $logistica = Logistica::where('id_empresa', Auth::user()->empresa)->first();
        $matricula = new Matricula();

        $matricula->id_empresa = $logistica->id_empresa;
        $matricula->nome = $request->nome;
        $matricula->matricula = $request->matricula;
        $matricula->tipo = $request->tipo;

        if ($request->nome == null) {
            $matricula->nome = ".";
        }

        $matricula->save();
        return redirect('logistica ');
    }

    public function get_programav2()
    {
        $programas = Programas::all()->sortBy('horaInicio');

        foreach ($programas as $programa) {
            $dias[] = $programa->dia;
        }

        $dias = array_unique($dias);
        usort($dias, function ($time1, $time2) {
            if (strtotime($time1) > strtotime($time2)) {
                return 1;
            } elseif (strtotime($time1) < strtotime($time2)) {
                return -1;
            } else {
                return 0;
            }
        });

        foreach ($dias as $dia) {
            if (date('d') == date('d', strtotime($dia))) {
                $activeDia = date('d', strtotime($dia));
                break;
            } else {
                $activeDia = date('d', strtotime($dias[0]));
            }
        }
        return view('programav2', ['dias' => $dias, 'activeDia' => $activeDia, 'programas' => $programas]);
    }

    public function report_bug()
    {
        return view('report-bug');
    }

    public function report_bug_submit()
    {

    }

    public function get_speedinterviews()
    {
        return view('speedinterviews');
    }

    public function inscrever($id)
    {
        $user = Auth::user();
        $si = new SpeedInterviews();

        $si->turno_si = $id;
        $si->id_user = $user->id;
        $si->save();

        return view('confirmacao');
    }

    public function desinscrever($id)
    {
        $user = Auth::user();
        $si = SpeedInterviews::where('turno_si', $id)->where('id_user', $user->id)->first();
        $si->delete();

        return view('homepage');
    }

    public function get_apresentacao_projetos()
    {
        return view('apresentacao');
    }

    public function retirar_pontos_workshop(Request $request)
    {
        $workshop = Workshop::where('id', $request->workshop_id)->first();
        foreach ($workshop->usersInscritos as $inscrito) {
            $presente = WorkshopPresenca::where('user_id', $inscrito->id)->where('workshop_id', $workshop->id)->first();
            if ($presente == null) {
                $user = User::where('id', $inscrito->id)->first();
                $pontos = $user->pontos;
                $user->pontos = $pontos - 1000;
                $log = new Log_ponto();
                $log->id_user = $user->id;
                $log->token = 'falta_workshop';
                $log->tipo = 'removido';
                $log->pontos = -1000;
                $log->save();
                $user->save();
            }
        }

        $workshop->pontos_retirados = 1;
        $workshop->save();

        return back();

    }

    public function send_mail_pulseiras() {
        $trocas = LogTrocaPontos::all();

        foreach($trocas as $troca) {
            $user = User::where('id', $troca->id_user)->first();
         
            $email = $user->email;
            if($troca->tipo == 'pack') {
                $pack = 'Pulseira + Copo + 5 Cervejas';
            } else {
                $pack = "Pulseira + Copo";
            }
            Mail::to($email)->send(new EmailPulseira($user, $pack));
            
        }
    }

}
