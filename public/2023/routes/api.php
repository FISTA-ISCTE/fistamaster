<?php

use App\Empresa;
use App\Feed;
use App\User;
use App\Keynote;
use App\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/workshops', function () {
    return Workshop::all();
})->name('workshop');

Route::get('/users', function () {
    return User::all();
})->name('users');

Route::get('/keynotes', function () {
    return Keynote::all();
})->name('keynote');

Route::get('/empresas', function () {
    return Empresa::orderBy('nome_empresa')->get();
})->name('empresas');

Route::post('login', 'apiController@authLogin');
Route::post('curso', 'apiController@update');
Route::post('ano', 'apiController@updateAno');
Route::post('token', 'apiController@insertToken');
Route::post('workshopinscrever', 'apiController@inscrever');
Route::post('jaInscrito', 'apiController@jaisncrito');
Route::post('workshopdesinscrever', 'apiController@desinscrever');
Route::post('gametoken', 'apiController@tokengame');
Route::post('gamepontos', 'apiController@pontosgame');
Route::get('/feed', function () {
    return Feed::all();
})->name('feed');

Route::post('checkinTenda', 'apiController@checkinTenda');
Route::post('checkinWorkshop', 'apiController@checkinWorkshop');
Route::post('checkinConferencia', 'apiController@checkinConferencia');
Route::post('checkinKeynote', 'apiController@checkinKeynote');

Route::post('/getBackoffice', 'apiController@getBackoffice');
Route::post('/guardarBackoffice', 'apiController@guardarBackoffice');

Route::post('registar', 'apiController@registar');

Route::post('apagarConta', 'apiController@apagarConta');

// Route::get('getWorkshopsInscritos', 'apiController@getWorkshopsInscritos');
