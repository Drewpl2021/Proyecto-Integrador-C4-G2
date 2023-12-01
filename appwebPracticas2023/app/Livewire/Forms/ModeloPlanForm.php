<?php

namespace App\Livewire\Forms;

use App\Models\Cartaaceptacion;
use App\Models\Convocatoria;
use App\Models\Gestionarplan;
use App\Models\Season;
use Livewire\Attributes\Rule;
use Livewire\Form;

class ModeloplanForm extends Form{
    public ?ModeloplanForm $modeloplan;

    #[Rule('required|file|mimes:pdf')]
public $formato_plan;

    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Gestionarplan $modeloplan){
        $this->formato_plan = $modeloplan->formato_plan;
        //$this->created_at = $convocatoria->created_at;
        //$this->updated_at = $convocatoria->updated_at;
    }

    public function resetForm(){
        $this->reset();
    }
}
