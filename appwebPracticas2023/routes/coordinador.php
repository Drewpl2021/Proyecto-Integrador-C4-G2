<?php

use App\Livewire\Admin\SedeManagemebt;
use App\Livewire\Coordinador\GinduccionManagement;
use App\Livewire\Coordinador\PinduccionManagement;
use Illuminate\Support\Facades\Route;

Route::get('/Ginduccions',GinduccionManagement::class)->middleware('can:Gestionar Induccion')->name('Ginduccions');
Route::get('/Gsedes',SedeManagemebt::class)->middleware('can:Gestionar Sedes')->name('Gsedes');
Route::get('/Pinduccion',PinduccionManagement::class)->middleware('can:Gestionar Induccion')->name('Pinduccion');
Route::get('/coordinador/Pinduccion/{induccion}', \App\Livewire\Coordinador\PinduccionManagement::class);




