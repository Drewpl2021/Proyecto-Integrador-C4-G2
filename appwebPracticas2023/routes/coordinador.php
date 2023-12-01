<?php

use App\Livewire\Admin\ConvocatoriaManagemebt;
use App\Livewire\Admin\SedeManagemebt;
use App\Livewire\Coordinador\GenerarcartapreManagement;
use App\Livewire\Coordinador\GinduccionManagement;
use App\Livewire\Coordinador\PinduccionManagement;
use App\Livewire\Coordinador\Studentconv;
use App\Livewire\Coordinador\ValidarcartasManagement;
use App\Livewire\Coordinador\VerCartaManagement;
use App\Livewire\Coordinador\VerPlanManagement;
use App\Livewire\Coordinador\VisitasManagement;
use App\Livewire\Student\SolicitarcartaManagement;
use Illuminate\Support\Facades\Route;

Route::get('/Ginduccions',GinduccionManagement::class)->middleware('can:Gestionar Induccion')->name('Ginduccions');
Route::get('/Gsedes',SedeManagemebt::class)->middleware('can:Gestionar Sedes')->name('Gsedes');
Route::get('/Pinduccion',PinduccionManagement::class)->middleware('can:Gestionar Induccion')->name('Pinduccion');
Route::get('/coordinador/Pinduccion/{induccion}', \App\Livewire\Coordinador\PinduccionManagement::class);
Route::get('/Generarcartapre/{Solicitarcarta}', [GenerarcartapreManagement::class, 'generateCartapre'])->middleware('can:Gestionar Induccion')->name('Generarcartapre');
//Route::get('/Generarcartapre',GenerarcartapreManagement::class)->middleware('can:Gestionar Induccion')->name('Generarcartapre');
Route::get('/coordinador/Generarcartapre/{Solicitarcarta}', \App\Livewire\Coordinador\GenerarcartapreManagement::class);
Route::get('/Validarcartas',ValidarcartasManagement::class)->middleware('can:Carta Presentacion')->name('Validarcartas');


//Pastor
Route::get('cartaaceptacions',VerCartaManagement::class)->middleware('can:Ver documentos')->name('cartaaceptacions');
Route::get('/carta-presentacion',[VerCartaManagement::class,'vercarta'])->name('carta-presentacion');
Route::get('modeloplans',VerPlanManagement::class)->middleware('can:Ver documentos')->name('modeloplans');


//Chisho


Route::get('/convocatorias',ConvocatoriaManagemebt::class)->middleware('can:Gestionar Convocatoria')->name('convocatorias');
Route::get('/studenconvocatoria', Studentconv::class)->middleware('can:Gestionar Convocatoria')->name('studenconvocatoria');
Route::get('/coordinador/studenconvocatoria/{convocatorias}', [Studentconv::class])->name('studenconvocatorias');
//Route::get('/visitas', [VisitasManagement::class])->middleware('can:Gestionar Visitas')->name('visitas');
Route::get('/visitas',VisitasManagement::class)->middleware('can:Gestionar Visitas')->name('visitas');




