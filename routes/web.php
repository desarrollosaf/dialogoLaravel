<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name('home');
Route::get('/rock_mexiquense', [\App\Http\Controllers\HomeController::class, "rock_mexiquense"]);
Route::get('/reforma_judicial', [\App\Http\Controllers\HomeController::class, "reforma_judicial"]);
Route::get('/paquete_fiscal', [\App\Http\Controllers\HomeController::class, "paquete_fiscal"]);
Route::get('/mujeres_presupuesto', [\App\Http\Controllers\HomeController::class, "mujeres_presupuesto"]);
Route::get('/maternidad_libre', [\App\Http\Controllers\HomeController::class, "maternidad_libre"]);
Route::get('/tala_clandestina', [\App\Http\Controllers\HomeController::class, "tala_clandestina"]);
Route::get('/derecho_al_ciudadano_digno', [\App\Http\Controllers\HomeController::class, "derecho_al_ciudadano_digno"]);
Route::get('/plastico_edomex', [\App\Http\Controllers\HomeController::class, "plastico_edomex"]);
Route::get('/patrimonio', [\App\Http\Controllers\HomeController::class, "patrimonio"]);
Route::get('/paridad_inclusion', [\App\Http\Controllers\HomeController::class, "paridad_inclusion"]);
Route::get('/blog_del_parlamento', [\App\Http\Controllers\HomeController::class, "blog_parlamento"]);
Route::get('/el_alfenique_patrimonio_cultural', [\App\Http\Controllers\HomeController::class, "el_alfenique"]);


Route::get('/articulos/{anio}/{trimestre}', [\App\Http\Controllers\HomeController::class, 'getArticulos']);
Route::post('/guardar-correo', [\App\Http\Controllers\HomeController::class, 'guardarCorreo'])->name('guardar.correo');
