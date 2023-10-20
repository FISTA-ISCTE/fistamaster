<?php

use App\Models\Empresa;
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
Route::get('/contacto', function () {
    return view('contacto');
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
    return view('landing_page');
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

Route::post('/registarEmpresa', [EmpresaController::class,'registarempresa'])->name('registarEmpresasite');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::middleware(['role:empresa'])->prefix('empresa')->group(function () {
        Route::get('/dashboard', function () {
            $company= Empresa::findOrFail(Auth::user()->id_empresa);
            return view('admin.empresas.dashboard')->with(['company'=>$company]);
        })->name('empresa.dashboard');

        Route::get('/faturacao', function () {
            $company= Auth::user()->id_empresa;
            $faturacao = Billing::where('id_empresa', $company)->first();
            return view('admin.empresas.faturacao')->with(['company'=>$company, 'faturacao'=>$faturacao]);
        })->name('empresa.faturacao');

        Route::post('/faturacao/guardar', [EmpresaController::class, 'guardarFaturacao'])->name('empresa.faturacao.guardar');

        Route::get('/logistica', function () {
            $company= Auth::user()->id_empresa;
            $empresa = Empresa::where('id', $company)->first();
            $logistica = Logistica::where('id_empresa', $company)->first();
            return view('admin.empresas.logistica')->with(['empresa'=>$empresa, 'logistica'=>$logistica]);
        })->name('empresa.logistica');

        Route::post('/logistica/guardar', [EmpresaController::class, 'guardarLogistica'])->name('empresa.logistica.guardar');
    });


    Route::get('/enviar-emails', [EmailController::class,'enviarEmailsArmazenados'])->name('enviar.emails');
    // Rotas para admin
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/emails-convites', function () {
            return view('admin.fista.email-empresas.view');
        })->name('enviar.emails.blade');


        Route::get('/dashboard', function () {
            return view('admin.fista.dashboard');
        })->name('admin.dashboard');
        Route::get('/empresas', function () {
            $empresas= Empresa::all();
            return view('admin.fista.empresas')->with(['empresas' => $empresas]);
        })->name('admin.empresas');
        Route::get('/empresas/1', function () {
            $empresas= Empresa::all();
            return view('admin.fista.empresas.view');
        })->name('view.empresas');


    });

    // Rotas para usuários
    Route::middleware(['role:user'])->prefix('user')->group(function () {


    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
