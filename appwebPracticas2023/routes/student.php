<?php

use App\Livewire\Student\CartaaceptacionManagement;
use App\Livewire\Student\ContratoManagement;
use App\Livewire\Student\GestionplanManagement;
use App\Livewire\Student\IinduccionManagement;
use App\Livewire\Student\LconvocatoriaManagement;
use App\Livewire\Student\MissolicitudesManagement;
use App\Livewire\Student\SolicitarcartaManagement;
use App\Livewire\Student\StudentManagement;
use App\Livewire\Student\SubirsedeManagement;
use App\Livewire\Student\VersedesManagement;
use Illuminate\Support\Facades\Route;

Route::get('/students',StudentManagement::class)->middleware('can:Subir Documentos')->name('students');
Route::get('/induccions',IinduccionManagement::class)->middleware('can:Inscribirse Induccion')->name('induccions');
Route::get('/subirsede',SubirsedeManagement::class)->middleware('can:Subir Sedes')->name('subirsede');
Route::get('/Solicitarcarta',SolicitarcartaManagement::class)->middleware('can:Subir Sedes')->name('Solicitarcarta');
Route::get('/gestionarplan/{id}/download', 'GestionarplanController@download');
Route::post('/upload', [PdfController::class, 'upload']);
Route::get('/download/{pdf}', [GestionarplanController::class, 'download']);
Route::get('/student/Solicitarcarta/{sede}', \App\Livewire\Student\SolicitarcartaManagement::class);
Route::get('/missolicitudes',MissolicitudesManagement::class)->middleware('can:Recibir Carta Presentacion')->name('missolicitudes');

//Pastor
Route::get('/cartaaceptacions',CartaaceptacionManagement::class)->middleware('can:Inscribirse Induccion')->name('cartaaceptacions');
Route::get('/contratos',ContratoManagement::class)->middleware('can:Inscribirse Induccion')->name('contratos');
Route::get('/gestionplans',GestionplanManagement::class)->middleware('can:Inscribirse Induccion')->name('gestionplans');


//Crisho

Route::get('/convocatorias',LconvocatoriaManagement::class)->middleware('can:Inscribirse Convocatoria')->name('convocatorias');
