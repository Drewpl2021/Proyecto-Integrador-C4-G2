<?php

use App\Livewire\Student\IinduccionManagement;
use App\Livewire\Student\StudentManagement;
use App\Livewire\Student\SubirsedeManagement;
use App\Livewire\Student\VersedesManagement;
use Illuminate\Support\Facades\Route;

Route::get('/students',StudentManagement::class)->middleware('can:Subir Documentos')->name('students');
Route::get('/induccions',IinduccionManagement::class)->middleware('can:Inscribirse Induccion')->name('induccions');
Route::get('/subirsede',SubirsedeManagement::class)->middleware('can:Subir Sedes')->name('subirsede');
Route::get('/gestionarplan/{id}/download', 'GestionarplanController@download');
Route::post('/upload', [PdfController::class, 'upload']);
<!--Nueva Ruta Para descargar PDF
    -->
Route::get('/download/{pdf}', [GestionarplanController::class, 'download']);



