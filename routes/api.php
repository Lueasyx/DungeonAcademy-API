<?php

use App\Http\Controllers\OpcoesController;
use App\Http\Controllers\PerguntasController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/perguntas', [PerguntasController::class, 'get']);
Route::post('/perguntas', [PerguntasController::class, 'post']);

Route::post('/respostas', [OpcoesController::class, 'post']);
Route::get('/respostas', [OpcoesController::class, 'get']);
Route::get('/respostasByPergunta/{perguntaId}', [OpcoesController::class, 'getByPergunta']);
