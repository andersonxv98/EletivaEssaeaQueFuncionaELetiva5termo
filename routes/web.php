<?php

use App\Http\Controllers\homecontroller;
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

Route::get('/index', [homecontroller::class, 'index']);

Route::get('/FormularioExer1', [\App\Http\Controllers\ExerciciosController::class, 'exer1Form']);

Route::post('/ResultadoExer1', [ExerciciosController::class, 'exer1Resultado']);

Route::get('/FormularioExer2', [\App\Http\Controllers\ExerciciosController::class, 'exer2Form']);

Route::post('/ResultadoExer2', [ExerciciosController::class, 'exer2Resultado']);

Route::get('/FormularioExer3', [\App\Http\Controllers\ExerciciosController::class, 'exer3Form']);

Route::post('/ResultadoExer3', [ExerciciosController::class, 'exer3Resultado']);

Route::get('/FormularioExer4', [\App\Http\Controllers\ExerciciosController::class, 'exer4Form']);

Route::post('/ResultadoExer4', [ExerciciosController::class, 'exer4Resultado']);

Route::get('/FormularioExer5', [\App\Http\Controllers\ExerciciosController::class, 'exer5Form']);

Route::post('/ResultadoExer5', [ExerciciosController::class, 'exer5Resultado']);