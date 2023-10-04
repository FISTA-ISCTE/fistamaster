<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

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

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
