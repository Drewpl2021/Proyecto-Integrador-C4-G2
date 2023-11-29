<?php

use App\Http\Controllers\GestionarplanController;
use App\Livewire\CrudConvocatoria;
use App\Livewire\Student\SubirsedeManagement;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\VersedesManagement;
use App\Livewire\Student\VersedesManagement as StudentVersedesManagement;
use App\Livewire\Student\IinduccionManagement;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/convocatorias',CrudConvocatoria::class)->name('convocatorias');
});
Route::get('/gestionarplan/{id}/download', [GestionarplanController::class, 'download']);


Route::get('/', [IinduccionManagement::class, 'index']);




