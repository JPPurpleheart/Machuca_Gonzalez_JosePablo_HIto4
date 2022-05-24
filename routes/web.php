<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\FolletosController;
use App\Http\Controllers\RoperoController;
use App\Http\Controllers\DespensaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\RecibesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/despensa', [DespensasController::class, 'index']);
Route::get('/despensa/create', [DespensasController::class, 'create']);
Route::get('/despensa/{id}/edit', [DespensasController::class, 'edit']);

Route::get('/folleto', [FolletosController::class, 'index']);
Route::get('/folleto/create', [FolletosController::class, 'create']);

Route::get('/libro', [LibrosController::class, 'index']);
Route::get('/libro/create', [LibrosController::class, 'create']);

Route::get('/prestamo', [PrestamosController::class, 'index']);
Route::get('/prestamo/create', [PrestamosController::class, 'create']);
Route::get('/prestamo/{id}/edit', [PrestamosController::class, 'edit']);

Route::get('/recibe', [RecibesController::class, 'index']);
Route::get('/recibe/create', [RecibesController::class, 'create']);
Route::get('/recibe/{id}/edit', [RecibesController::class, 'edit']);

Route::get('/ropero', [RoperosController::class, 'index']);
Route::get('/ropero/create', [RoperosController::class, 'create']);
Route::get('/ropero/{id}/edit', [RoperosController::class, 'edit']);

Route::get('/usuario', [UsuariosController::class, 'index']);
Route::get('/usuario/create', [UsuariosController::class, 'create']);
Route::get('/usuario/{id}/edit', [UsuariosController::class, 'edit']);
