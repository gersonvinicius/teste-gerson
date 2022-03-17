<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CubagemController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\NumeroController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('nota', [NotaController::class, 'index']);
Route::get('nota/inserir', [NotaController::class, 'create'])->name('nota.inserir');
Route::post('nota/gravar', [NotaController::class, 'store'])->name('nota.gravar');
Route::get('numero', [NumeroController::class, 'index']);
Route::resource('cubagem', CubagemController::class);
