<?php

use App\Livewire\Supervisor\EvaluacionesManagement;
use App\Livewire\Supervisor\EvaluacionManagement;
use App\Livewire\Supervisor\SupervisorManagement;
use App\Livewire\Supervisor\VisitasManagement;
use Illuminate\Support\Facades\Route;

//Route::get('/supervisors',SupervisorManagement::class)->middleware('can:Subir Archivo Evaluador')->name('supervisors');
Route::get('/visitas',VisitasManagement::class)->middleware('can:Subir Archivo Evaluador')->name('visitas');
Route::get('/evaluciones',EvaluacionManagement::class)->middleware('can:Subir Archivo Evaluador')->name('evaluaciones');
