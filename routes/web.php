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

Route::get('nota', [NotaController::class, 'index'])->name('nota.index');
Route::get('nota/inserir', [NotaController::class, 'create'])->name('nota.inserir');
Route::post('nota/gravar', [NotaController::class, 'store'])->name('nota.gravar');

Route::get('numero', [NumeroController::class, 'index'])->name('numero.index');

Route::get('cubagem', [CubagemController::class, 'index'])->name('cubagem.index');
Route::get('cubagem/inserir', [CubagemController::class, 'create'])->name('cubagem.inserir');
Route::post('cubagem/gravar', [CubagemController::class, 'store'])->name('cubagem.gravar');
Route::get('cubagem/gerar-pdf', [CubagemController::class, 'gerarPdf'])->name('cubagem.pdf');
