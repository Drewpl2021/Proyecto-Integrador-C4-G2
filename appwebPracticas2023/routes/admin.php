<?php

use App\Livewire\Admin\ConvocatoriaManagemebt;
use App\Livewire\Admin\RoleManagement;
use App\Livewire\Admin\SedeManagemebt;
use App\Livewire\Admin\UserManagement;
use Illuminate\Support\Facades\Route;

Route::get('/users',UserManagement::class)->middleware('can:Ver dashboard')->name('users');
Route::get('/rols',RoleManagement::class)->middleware('can:Ver dashboard')->name('rols');
Route::get('/convocatorias',ConvocatoriaManagemebt::class)->middleware('can:Ver dashboard')->name('convocatorias');
Route::get('/sedes',SedeManagemebt::class)->middleware('can:Ver dashboard')->name('sedes');

