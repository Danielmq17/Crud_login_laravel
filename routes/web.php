<?php

use App\Http\Controllers\MedicamentosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacientesController;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::resource('/pacientes', PacientesController::class);
    Route::resource('/medicamentos', MedicamentosController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
