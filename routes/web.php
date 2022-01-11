<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/cadastrar', [UsuariosController::class, 'cadastrar']);
Route::post('/usuarios/adicionar', [UsuariosController::class, 'adicionar']);
Route::get('/usuarios/{id}/visualizar', [UsuariosController::class, 'visualizar']);
Route::post('/usuarios/atualizar/{id}', [UsuariosController::class, 'atualizar']);
Route::delete('/usuarios/excluir/{id}', [UsuariosController::class, 'excluir']);
