<?php

use App\Http\Controllers\ReporteController;
use App\Livewire\Student\CulminacionManagement;
use App\Livewire\Student\IinduccionManagement;
use App\Livewire\Student\ReporteManagement;
use App\Livewire\Student\StudentManagement;
use App\Livewire\Student\SubirsedeManagement;
use App\Livewire\Student\VersedesManagement;
use Illuminate\Support\Facades\Route;

Route::get('/reportes/pdf', [ReporteController::class, 'pdf'])->name('reportes.pdf');
Route::get('/students',StudentManagement::class)->middleware('can:Subir Documentos')->name('students');
Route::get('/induccions',IinduccionManagement::class)->middleware('can:Inscribirse Induccion')->name('induccions');
Route::get('/subirsede',SubirsedeManagement::class)->middleware('can:Subir Sedes')->name('subirsede');
Route::get('/culminacion',CulminacionManagement::class)->middleware('can:Subir Culminacion')->name('culminacion');
Route::get('/reportes',ReporteManagement::class)->middleware('can:Reporte')->name('reportes');
Route::get('/gestionarplan/{id}/download', 'GestionarplanController@download');
Route::post('/upload', [PdfController::class, 'upload']);
Route::get('/download/{pdf}', [GestionarplanController::class, 'download']);
Route::get('/reportes/pdf', [ReporteController::class, 'pdf'])->name('reportes.pdf');


