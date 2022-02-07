<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComplementoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\RestauranteController;
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

Route::group(['prefix' => '/endereco'], function () use ($router) {
    Route::post('/',  [EnderecoController::class, 'store']);
    Route::get('/',  [EnderecoController::class, 'index']);
    Route::get('/{id}',  [EnderecoController::class, 'show']);
    Route::put('/{id}',  [EnderecoController::class, 'update']);
    Route::delete('/{id}',  [EnderecoController::class, 'destroy']);
});

Route::group(['prefix' => '/restaurante'], function () use ($router) {
    Route::post('/',  [RestauranteController::class, 'store']);
    Route::get('/',  [RestauranteController::class, 'index']);
    Route::get('/full',  [RestauranteController::class, 'indexFull']);
    Route::get('/{id}',  [RestauranteController::class, 'show']);
    Route::get('/full/{id}',  [RestauranteController::class, 'showFull']);
    Route::put('/{id}',  [RestauranteController::class, 'update']);
    Route::delete('/{id}',  [RestauranteController::class, 'destroy']);
});

Route::group(['prefix' => '/produto'], function () use ($router) {
    Route::post('/',  [ProdutoController::class, 'store']);
    Route::get('/',  [ProdutoController::class, 'index']);
    Route::get('/{id}',  [ProdutoController::class, 'show']);
    Route::put('/{id}',  [ProdutoController::class, 'update']);
    Route::delete('/{id}',  [ProdutoController::class, 'destroy']);
});

Route::group(['prefix' => '/complemento'], function () use ($router) {
    Route::post('/',  [ComplementoController::class, 'store']);
    Route::get('/',  [ComplementoController::class, 'index']);
    Route::get('/{id}',  [ComplementoController::class, 'show']);
    Route::put('/{id}',  [ComplementoController::class, 'update']);
    Route::delete('/{id}',  [ComplementoController::class, 'destroy']);
});

Route::group(['prefix' => '/categoria'], function () use ($router) {
    Route::post('/',  [CategoriaController::class, 'store']);
    Route::get('/',  [CategoriaController::class, 'index']);
    Route::get('/{id}',  [CategoriaController::class, 'show']);
    Route::put('/{id}',  [CategoriaController::class, 'update']);
    Route::delete('/{id}',  [CategoriaController::class, 'destroy']);
});