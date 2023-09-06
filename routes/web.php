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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/become-a-partner', function () {
    return view('become-partner');
})->name('become-partner');

Route::get('/registarEmpresa/{name?}', function ($name = null) {
    return view('registarEmpresa');
})->name('registarEmpresa');

Route::post('/registarEmpresa', [EmpresaController::class,'registarempresa'])->name('registarEmpresasite');
