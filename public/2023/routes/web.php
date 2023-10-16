<?php

use App\Invite;
use App\Keynote;
use App\User;
use App\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
/**
 * Route::redirect('/','/pt');
 * Route::group(['prefix' => '{language}'], function(){
 */
Route::get('/classificacao', 'PageController@userclassificacao')->name('fistaclassificacao');
Route::get('/classificacao', 'PageController@userclassificacao')->name('fistaclassificacao');

/*Route::get('/alunos', function () {
$users = User::all()->where('id_curso', NULL);
return view('alunos', ['users' => $users]);
})->name('homepage');*/

Route::get('/', function (Request $request) {
    $aux = User::all();
    if (!$aux->isEmpty()) {
        $members = $aux->random()->get();
    } else {
        $members = $aux;
    }

    $keynotes = Keynote::all();
    return view('homepage', ['members' => $members, 'keynotes' => $keynotes]);
})->name('homepage');

Route::get('/corridadecursos', 'PageController@corrida_cursos')->name('corridadecursos');
Route::get('/politica-privacidade', function () {
    return view('privacypolicy');
})->name('politica');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::post('/contacts', 'PageController@store_contacts');

Route::get('/sorteio', function () {
    return view('sorteio');
})->name('sorteio');
Route::get('/resultadoSorteio', function () {
    $user = Auth::user();
    if ($user != null && ($user->role_id == 29 || $user->role_id == 1)) {
        return view('resultadoSorteio', ['vencedor' => null]);
    } else {
        return redirect()->route('homepage');
    }
})->name('resultadoSorteio');
Route::post('/resultadoSorteio', 'PageController@resultadoSorteio')->name('resultadoSorteio');
Route::post('/pontosMAT', 'PageController@pontosMAT')->name('pontosMAT');
Route::post('/sorteioInscrever', 'PageController@sorteio')->name('sorteioInscrever');
Route::get('/orador', 'PageController@get_oradores')->name('oradores');
Route::get('/conferencias', 'PageController@get_conferencias')->name('conferencias');
Route::get('/contactsAccepted', function () {
    return view('contactsAccepted');
})->name('contactsAccepted');
Route::get('/media', function () {
    return view('media');
})->name('media');
Route::get('/programa', 'PageController@get_programa')->name('programa');
Route::get('/programaItSpeedTalks', 'PageController@get_programa_it')->name('programa_it');
Route::get('/confirmacao2', function () {
    return view('confirmacao2');
})->name('confirmacao2');
Route::get('/confirmacao', function () {
    return view('confirmacao');
})->name('confirmacao');
Route::get('/concurso-ideias', function () {
    return view('concurso-ideias');
})->name('concursoIdeias');
Route::get('/empresas', 'PageController@show_empresas')->name('empresas');
Route::get('/become-a-partner', function () {
    return view('becomepartners');
})->name('becomePartener');
Route::get('/error', function () {
    return view('error');
})->name('error');

//Route::get('/email','PageController@send_email')->name('email');
//Route::get('/sendEmailWorkshop', 'PageController@send_emailW')->name('sendEmailWorkshop');
//Route::get('/sendEmailPacoteGrafico','PageController@send_emailPG')->name('sendEmailPacoteGrafico');
//Route::get('/sendEmailCTF','PageController@send_emailCTF')->name('sendEmailCTF');
//Route::get('sendEmailPlanta','PageController@send_emailPlanta')->name('sendEmailPlanta');
Route::get('sendEmailFinalEmpresas','PageController@send_emailEmpresas')->name('sendEmailFinalEmpresas');
//Route::get('sendEmailParticipacao','PageController@send_emailParticipacao')->name('sendEmailParticipacao');

Route::get('/registarEmpresa/{name?}', function ($name = null) {
    return view('registarEmpresa');
})->name('registarEmpresa');
Route::get('/concurso-matematica', function () {
    return view('concurso-matematica');
})->name('concurso-matematica');
Route::get('/concurso-ciberseguranca', function () {
    return view('concurso-ciberseguranca');
})->name('concurso-ciberseguranca');
Route::get('/jogo', 'PageController@jogo')->name('jogo');
Route::post('/presenca_work', 'PageController@presenca_work')->name('presenca_work');
Route::post('/concurso-ideias', 'PageController@concurso_ideias')->name('concurso_ideias');
Route::post('/concurso-matematica', 'PageController@concurso_matematica')->name('concurso_matematica');
Route::post('/concurso-ciberseguranca', 'PageController@concurso_ciberseguranca')->name('concurso_ciberseguranca');
Route::post('/registarEmpresa', 'PageController@registarempresa')->name('registarEmpresasite');
Route::post('/empresa/updateEmpresaP', 'PageController@updateEmpresas')->name('updatephoto');
Route::post('/empresa/updateFaturas', 'PageController@updateFatura')->name('updatefatura');
Route::post('/empresa/updateInfoEmpresa', 'PageController@updateInfoEmpresa')->name('updateinfoempresa');
Route::post('/log_pontos', 'PageController@token_empresas')->name('tokenempresas');
Route::post('/workshop/empresainscrever', 'PageController@workshopempresainscrever')->name('workshopempresainscrever');
Route::post('/itspeedtalk/empresainscrever', 'PageController@itspeedtalkempresainscrever')->name('itspeedtalkempresainscrever');
Route::get('/registerempresassite/{name?}', function ($name = null) {
    return view('registerempresassite');
})->name('registerempresassite');
Route::post('/jogo/jogoBack', 'PageController@jogoBack')->name('jogoBack');
Route::get('/workshops', 'WorkshopController@index')->name('workshops');
Route::get('/workshops/attach/{id}', ['as' => 'workshopAttach', 'uses' => 'WorkshopController@attacher']);
Route::get('/workshops/detach/{id}', ['as' => 'workshopDetach', 'uses' => 'WorkshopController@detacher']);
Route::post('/uploadProjetoIdeias', 'PageController@uploadProjetoIdeias')->name('uploadProjetoIdeias');
Route::post('/pontosUser', 'PageController@pontosUser')->name('pontosUser');
Route::post('/tokenJogo', 'PageController@tokenJogo')->name('tokenJogo');

Route::get('/workshops/attach2/{id}', ['as' => 'workshopAttach2', 'uses' => 'WorkshopController@attacher2']);

Route::get('/home', 'HomeController@index')
    ->middleware('confirmed')
    ->name('home');
Route::post('/home/feedone', 'PageController@feedem')->name('feedEmpresa');
Route::post('/minhaconta/submitBackOffice', 'PageController@submitBackOffice');
Route::get('/back_office', 'PageController@getBackoffice')->name('back_office');
Route::get('/exportarBackOffice', 'PageController@exportarBackOffice')->name('exportarBackOffice');
Route::post('minhaconta/updateprofile', 'PageController@updateProfile')->name('minhaConta');
Route::post('/minhaconta/cvupload', 'PageController@uploadcv');
Route::get('/minhaconta/{uuid}', function ($uuid) {
    $user = User::where('uuid', $uuid)->first();
    $workshops = Workshop::all();
    $recomendados = [];
    foreach ($workshops as $workshop) {
        if (
            Auth::user()
            ->workshopsInscritos()
            ->get()
            ->contains($workshop) == true
        ) {
            $recomendados[] = $workshop;
        }
    }

    return View::make('profile', ['recomendados' => $recomendados, 'workshops' => $workshops, 'user' => $user]);
})
    ->middleware('confirmed')
    ->name('minhaConta');

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

Route::prefix('/admin')
    ->middleware('confirmed')
    ->group(function () {
        Voyager::routes();
    });

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('login', 'Auth\LoginController@login');

Route::post('minhaconta/submitSelect', 'PageController@save');
Route::post('minhaconta/updatepassword', 'PageController@updatepass');
Route::post('minhaconta/updatelinkedin', 'PageController@updatelinkedin');

Route::post('/checkinWorkshop', 'PageController@checkinWorkshop')->name('checkinWorkshop');

Route::get('check_in', function () {
    return view('check_in');
});

Route::get('troca_pontos', function () {
    if (Auth::check() && (Auth::user()->role_id == 3 || Auth::user()->role_id == 7 || Auth::user()->role_id == 4)) {
        return view('troca_pontos');
    } else {
        return redirect()->route('homepage');
    }
});

Route::post('troca_pontos', 'PageController@troca_pontos')->name('troca_pontos');

Route::post('check_in_conferencia', 'PageController@check_in_conferencia')->name('check_in_conferencia');
Route::post('check_in_tenda', 'PageController@check_in_tenda')->name('check_in_tenda');
Route::post('check_in_keynote', 'PageController@check_in_keynote')->name('check_in_keynote');

//['uuid' => 'PageController@verificar_email'])
Route::post('submeterRespostasConcMat', 'PageController@submeterRespostasConcMat')->name('submeterRespostasConcMat');

Route::get('/resumo2014', function () {
    return view('resumo2014');
})->name('resumo2014');

Route::get('/resumo2022', 'PageController@resumo_2022')->name('resumo2022');

Route::get('/faq', function () {
    return view('faqpartner');
})->name('faqpartner');

Route::get('verificar_email/{uuid}', function ($uuid) {
    $user = User::where('uuid', $uuid)->first();
    if ($user->email_verified_at == null) {
        $user->email_verified_at = new DateTime();
        if ($user->remember_token != null) {
            $invite = Invite::where('uuid_convidado', $user->uuid)->first();
            $userConvidar = User::where('uuid', $invite->uuid_convidar)->first();
            $userConvidar->pontos += 50;
            $log = new Log_ponto();
            $log->id_user = $user->id;
            $log->token = 'invite';
            $log->tipo = 'convidado por '+$userConvidar->id;
            $log->pontos = 50;
            $userConvidar->count_conv += 1;
            $userConvidar->save();
            $log->save();
        }
        $user->save();
    }
    return redirect()->route('verify.complete');
})->name('verification.notice');
Route::get('/verificar', function () {
    return view('auth/verify');
})->name('verify');
Route::post('/verificar_resend', 'Auth\VerificationController@resend')->name('verify.resend');
Route::get('/verificarcompleto', function () {
    return view('auth/verifycomplete');
})->name('verify.complete');

Route::get('/resetpass', 'Auth\ResetPasswordController@sendResetLink')->name('password.email');
Route::get('verificar_email/{token}/{uuid}', function ($token, $uuid) {
    $user = User::where('uuid', $uuid)->first();
});

Auth::routes();

Route::get('/logistica', 'PageController@get_logistica')->name('logistica');
Route::post('/logistica8', 'PageController@post_logistica8')->name('logistica8');
Route::post('/logistica9', 'PageController@post_logistica9')->name('logistica9');
Route::post('/matricula', 'PageController@post_matricula')->name('matricula');

Route::get('/keynote', function () {
    return view('keynote');
})->name('keynote');

Route::get('/programav2', 'PageController@get_programav2')->name('programav2');

Route::get('/qrcode/{uuid}', function ($uuid) {
    return View::make('qrcode');
})
    ->middleware('confirmed')
    ->name('qrcode');

Route::get('/speedinterviews', 'PageController@get_speedinterviews')->name('speedinterviews');
Route::get('/inscreverspeedinterview/{id}', ['as' => 'inscreverspeedinterview', 'uses' => 'PageController@inscrever']);
Route::get('/desinscreverspeedinterview/{id}', ['as' => 'desinscreverspeedinterview', 'uses' => 'PageController@desinscrever']);

Route::get('/apresentacaoprojetos', 'PageController@get_apresentacao_projetos')->name('apresentacaoprojetos');

Route::post('/retirarpontosworkshop', 'PageController@retirar_pontos_workshop')->name('retirarpontosworkshop');

Route::get('/concurso/{codigo}', 'PageController@concurso_mat')->name('concurso_mat');
Route::post('/submit_mat', 'PageController@submit_mat')->name('submit_mat');
Route::post('/avaliarMat', 'PageController@avaliarMat')->name('avaliarMat');

Route::get('/sendEmailPulseiras', 'PageController@send_mail_pulseiras')->name('sendEmailPulseiras');