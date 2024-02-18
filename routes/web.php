<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Models\Empresa;
use Illuminate\Http\Request;
use App\Models\ItSpeed;
use App\Models\Log_Token;
use App\Models\LogisticaSlots;
use App\Models\Programas;
use App\Models\SpeedInterview;
use App\Models\Team;
use App\Models\Workshop;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EmailController;
use App\Models\Billing;
use App\Models\Logistica;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/programa', function () {
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
});

Route::get('/eventos', function () {
    return view('eventos');
});
Route::get('/conferencias', function () {
    return view('conferencias');
});

Route::get('/ctf', function () {
    return view('ctf');
});

Route::get('eventos/tecnologias', function () {
    return view('eventos.tecnologias');
});
Route::get('eventos/arquitetura', function () {
    return view('eventos.arquitetura');
});


Route::get('/confirmacao', function () {
    return view('confirmacao');
});
Route::post('/resgistar-concurso-ideias', [PageController::class, 'resgistar_concurso_ideias'])->name('resgistar_concurso_ideias');

Route::post('/resgistar-concurso-ctf', [PageController::class, 'resgistar_concurso_ctf'])->name('resgistar_concurso_ctf');

Route::get('/concurso-de-ideias', function () {
    return view('concurso-ideias');
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/brevemente', function () {
    return view('brevemente');
});

Route::get('/politica-de-privacidade', function () {
    return view('politica');
})->name('politica');
Route::get('/', function () {
    $empresasdiamond = Empresa::where('plano', 'diamond')->where('mostrar', '1')->get();
    $countdiamount = $empresasdiamond->count();
    return view('landing_page')->with(['empresasdiamount' => $empresasdiamond, 'countdiamount' => $countdiamount]);
});

Route::get('/D1mC7SLPoT6QYF7ruLhftKYpYCMOgS/tecas', function () {
    // Verifica se o usuário está autenticado
    if (Auth::check()) {
        // Gera um token temporário para o usuário ou utiliza um existente
        $tokenTemporario = Auth::user()->gerarTokenTemporario();
        return redirect("/ista-D1cdmC7-SLP-oT384nd6Q-YF7r-uLhft-KYpY-CMOgS-tecas?token={$tokenTemporario}");
    }
})->middleware('auth');

// Rota para acessar o recurso com o token temporário
Route::get('/ista-D1cdmC7-SLP-oT384nd6Q-YF7r-uLhft-KYpY-CMOgS-tecas', function (Request $request) {
    $token = $request->query('token');
    // Verifica o token temporário e permite acesso ao recurso
    if (\App\Models\User::verificarTokenTemporario($token)) {
        $user = Auth::user();

        // Verifica se o token já foi inserido para este usuário
        $tokenExistente = Log_Token::where('id_user', $user->id)
            ->where('token', $token)
            ->first();

        if ($tokenExistente) {
            abort(403,'Já lês-te o QR code!');
        } else {
            $user->pontos += 100;
            $user->save();
            $novoToken = new Log_Token();
            $novoToken->id_user = $user->id;
            $novoToken->token = $token;
            $novoToken->pontos = 100;
            $novoToken->tipo = 'Pontos oferecidos pelo Tecas';
            $novoToken->save();

        }
        return view('tcas');

    } else {
        abort(403,'QR Code expirado!'); // Acesso negado
    }
});


Route::get('/workshops', function () {
    $workshops = Workshop::where('show', 1)->get();
    return view('workshops')->with(['workshops' => $workshops]);
})->name('workshops');
Route::get('/speed-interviews', function () {
    $speedinterview = SpeedInterview::where('mostrar', 1)->get();
    return view('speedinterview')->with(['speedinterview' => $speedinterview]);
})->name('speedinterview');
Route::get('/empresas', function () {
    $empresaspremium = Empresa::where('plano', 'premium')->where('mostrar', '1')->get();
    $empresasdiamond = Empresa::where('plano', 'diamond')->where('mostrar', '1')->get();
    $countdiamount = $empresasdiamond->count();
    $countpremium = $empresaspremium->count();
    $empresasgold = Empresa::where('plano', 'gold')->where('mostrar', '1')->get();
    $countgold = $empresasgold->count();
    $empresassilver = Empresa::where('plano', 'silver')->where('mostrar', '1')->get();
    $countsilver = $empresassilver->count();
    return view('empresas')->with(['empresasdiamount' => $empresasdiamond, 'empresaspremium' => $empresaspremium, 'empresasgold' => $empresasgold, 'empresassilver' => $empresassilver, 'countpremium' => $countpremium, 'countgold' => $countgold, 'countsilver' => $countsilver, 'countdiamount' => $countdiamount]);
});
Route::get('/confirmacao-empresa', function () {
    return view('admin.empresas.confirmacaopage');
})->name('confirmacao1');
Route::get('/entrar', function () {
    return view('login');
})->name('entrar')->middleware('redirectIfAuthenticated');
Route::get('/registar-user', function () {
    return view('admin.user.register');
})->name('registar_user')->middleware('redirectIfAuthenticated');

Route::get('/become-a-partner', function () {
    return view('admin.empresas.become');
})->name('become');
Route::get('/registarEmpresa/{name?}', function ($name = null) {
    return view('admin.empresas.registar_info');
})->name('registarEmpresa');

Route::get('/sobre-nos', function () {
    $teams = Team::with('user')->get();

    $teamData = $teams->map(function ($team) {
        return [
            'team_name' => $team->name,
            'user_name' => $team->user->name, // Assumindo que 'name' é um campo na tabela User
            'linkedin' => $team->user->linkedin, // Assumindo que 'linkedin' é um campo na tabela User
            'photo' => $team->user->profile_photo_url,
            'prioridade' => $team->prioridade,
        ];
    });
    return view('about')->with(['teamData' => $teamData]);
})->name('about');

Route::post('/registarEmpresa', [EmpresaController::class, 'registarempresa'])->name('registarEmpresasite');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::middleware(['role:empresa'])->prefix('empresa')->group(function () {
        Route::get('/admin-change', function () {
            $user = Auth::user();
            $user->syncRoles('admin');
            $user->save();
            return redirect("/admin/dashboard");
        })->name('admin.change');
        Route::get('/seats', function () {
            return view('admin.empresas.seats-map');
        })->name('empresa.seats');
        Route::get('/seats28', function () {
            return view('admin.empresas.seats-map28');
        })->name('empresa.seats28');
        Route::get('/seats29', function () {
            return view('admin.empresas.seats-map29');
        })->name('empresa.seats29');
        Route::get('/workshop', function () {
            return view('admin.empresas.workshop');
        })->name('empresa.workshop');

        Route::get('/dashboard', function () {
            $company = Empresa::findOrFail(Auth::user()->id_empresa);
            return view('admin.empresas.dashboard')->with(['company' => $company]);
        })->name('empresa.dashboard');

        Route::get('/itspeedtalks', function () {
            return view('admin.empresas.itspeedtalks');
        })->name('empresa.itspeedtalks');

        Route::get('/faturacao', function () {
            $company = Auth::user()->id_empresa;
            $faturacao = Billing::where('id_empresa', $company)->first();
            return view('admin.empresas.faturacao')->with(['company' => $company, 'faturacao' => $faturacao]);
        })->name('empresa.faturacao');

        Route::post('/faturacao/guardar', [EmpresaController::class, 'guardarFaturacao'])->name('empresa.faturacao.guardar');
        Route::post('/infos/guardar', [EmpresaController::class, 'editarinfos'])->name('empresa.infos.guardar');

        Route::get('/logistica', function () {
            $company = Auth::user()->id_empresa;
            $empresa = Empresa::where('id', $company)->first();
            $logistica = Logistica::where('id_empresa', $company)->first();
            $slot_montagem1 = LogisticaSlots::where('tipo', "montagem")->where('dia', "1")->get();
            $slot_desmontagem1 = LogisticaSlots::where('tipo', "desmontagem")->where('dia', "1")->get();
            $slot_montagem2 = LogisticaSlots::where('tipo', "montagem")->where('dia', "2")->get();

            $slot_desmontagem2 = LogisticaSlots::where('tipo', "desmontagem")->where('dia', "2")->get();

            $contagemAlmocos12h_dia1 = Logistica::where("almocos_dia1", "12h-13h")->count();
            $contagemAlmocos13h_dia1 = Logistica::where("almocos_dia1", "13h-14h")->count();
            $contagemAlmocos12h_dia2 = Logistica::where("almocos_dia2", "12h-13h")->count();
            $contagemAlmocos13h_dia2 = Logistica::where("almocos_dia2", "13h-14h")->count();
            return view('admin.empresas.logistica')->with(['contagemAlmocos12h_dia1' => $contagemAlmocos12h_dia1, 'contagemAlmocos13h_dia1' => $contagemAlmocos13h_dia1, 'contagemAlmocos12h_dia2' => $contagemAlmocos12h_dia2, 'contagemAlmocos13h_dia2' => $contagemAlmocos13h_dia2, 'empresa' => $empresa, 'logistica' => $logistica, 'slot_montagem1' => $slot_montagem1, 'slot_montagem2' => $slot_montagem2, 'slot_desmontagem1' => $slot_desmontagem1, 'slot_desmontagem2' => $slot_desmontagem2]);

        })->name('empresa.logistica');

        Route::post('/logistica/guardar', [EmpresaController::class, 'guardarLogistica'])->name('empresa.logistica.guardar');
    });


    Route::get('/enviar-emails', [EmailController::class, 'enviarEmailsArmazenados'])->name('enviar.emails');
    // Rotas para admin
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/seats', function () {
            return view('admin.fista.seats-map');
        })->name('fista.seats');
        Route::get('/seats28', function () {
            return view('admin.fista.seats-map28');
        })->name('fista.seats28');
        Route::get('/seats29', function () {
            return view('admin.fista.seats-map29');
        })->name('fista.seats29');

        Route::get('/emails-convites', function () {
            return view('admin.fista.email-empresas.view');
        })->name('enviar.emails.blade');

        Route::get('/send-emails', function () {
            return view('admin.fista.send_emails');
        })->name('enviar.emails');

        Route::get('/change-roles', function () {
            return view('admin.fista.change-role');
        })->name('fista.change-role');

        Route::get('/dashboard', function () {
            $usersWithoutRoleXCount = User::all()->count();
            $empresasCount = Empresa::all()->count();
            $sessions = $activeSessions = DB::table(config('session.table', 'sessions'))->count();
            return view('admin.fista.dashboard')->with(['usersWithoutRoleXCount' => $usersWithoutRoleXCount, 'empresasCount' => $empresasCount, 'sessions' => $sessions]);
        })->name('admin.dashboard');
        Route::get('/empresas', function () {
            $empresas = Empresa::paginate(10);
            return view('admin.fista.empresas')->with(['empresas' => $empresas]);
        })->name('admin.empresas');
        Route::get('/documentos', function () {
            $empresas = Empresa::all();
            return view('admin.fista.documentos')->with(['empresas' => $empresas]);
        })->name('admin.documentos');

        Route::get('/empresas/{id}', function ($id) {
            $empresa = Empresa::find($id);
            return view('admin.fista.empresas.view')->with(['empresa' => $empresa]);
        })->name('view.empresas');

        Route::get('/empresas/faturacao/{id}', function ($id) {
            $empresa = Empresa::find($id);
            $fatura = Billing::where('id_empresa', $id)->first();
            return view('admin.fista.empresas.faturacao')->with(['fatura' => $fatura, 'empresa' => $empresa]);
        })->name('fatura.empresas');

        Route::get('/empresas/logistica/{id}', function ($id) {
            $empresa = Empresa::find($id);
            $logistica = Logistica::where('id_empresa', $id)->first();
            $slot_montagem1 = LogisticaSlots::where('tipo', "montagem")->where('dia', "1")->get();
            $slot_desmontagem1 = LogisticaSlots::where('tipo', "desmontagem")->where('dia', "1")->get();
            $slot_montagem2 = LogisticaSlots::where('tipo', "montagem")->where('dia', "2")->get();
            $slot_desmontagem2 = LogisticaSlots::where('tipo', "desmontagem")->where('dia', "2")->get();

            return view('admin.fista.empresas.logistica')->with(['logistica' => $logistica, 'empresa' => $empresa, 'slot_montagem1' => $slot_montagem1, 'slot_montagem2' => $slot_montagem2, 'slot_desmontagem1' => $slot_desmontagem1, 'slot_desmontagem2' => $slot_desmontagem2]);
        })->name('logistica.empresas');

        Route::get('/itspeedtalks', function () {

            $itspeedtalks = ItSpeed::all();
            return view('admin.fista.itspeedtalks')->with(['itspeedtalks' => $itspeedtalks]);
        })->name('itspeedtalks.empresas');

        Route::post('/toggle-mostrar/{id}', [AdminController::class, 'toggleMostrar'])->name('toggle.mostrar');

        Route::post('/infos/guardar/{id}', [AdminController::class, 'editarinfos'])->name('admin.empresa.infos.guardar');


    });

    // Rotas para usuários
    Route::middleware(['role:user'])->prefix('user')->group(function () {
        Route::get('/interesses', function () {
            return view('admin.user.interesses');
        })->name('user.interesses');

        Route::get('/pontos', function () {
            return view('admin.user.pontos');
        })->name('user.pontos');

        Route::get('/feed-a', function () {
            return view('admin.user.feed');
        })->name('user.feed');

    });


    Route::get('/dashboard', function () {
        return view('profile.show');
    })->name('dashboard');

});
