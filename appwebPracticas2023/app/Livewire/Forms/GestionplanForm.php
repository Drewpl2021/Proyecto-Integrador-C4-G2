<?php

namespace App\Livewire\Forms;

use App\Models\Cartaaceptacion;
use App\Models\Convocatoria;
use App\Models\Gestionarplan;
use App\Models\Season;
use Livewire\Attributes\Rule;
use Livewire\Form;

class GestionplanForm extends Form{
    public ?Gestionarplan $gestionplan;


    #[Rule('required|file|mimes:pdf')]
    public $adjuntar_plan;

    #[Rule('required|')]
    public $user_id;

    #[Rule('required|string')]
    public $actividades;


    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Gestionarplan $gestionplan){
        $this->adjuntar_plan = $gestionplan->adjuntar_plan;
        $this->user_id = $gestionplan->user_id;
        //$this->created_at = $convocatoria->created_at;
        //$this->updated_at = $convocatoria->updated_at;
    }

    public function resetForm(){
        $this->reset();
    }
}
