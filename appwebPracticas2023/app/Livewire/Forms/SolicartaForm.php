<?php

namespace App\Livewire\Forms;

use App\Models\Sede;
use App\Models\Solicitarcarta;
use Livewire\Attributes\Rule;
use Livewire\Form;

class SolicartaForm extends Form{
    public ?Solicitarcarta $solicarta;

    #[Rule('required|min:4')]
    public $posibles_activiades;

    #[Rule('required|min:4')]
    public $area_competencia;

    #[Rule('min:1')]
    public $estado;

    #[Rule('min:4')]
    public $carta_presentacion_id;




    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Solicitarcarta $solicarta){
        $this->solicarta = $solicarta;
        $this->posibles_activiades = $solicarta->posibles_activiades;
        $this->area_competencia = $solicarta->area_competencia;
        $this->estado = $solicarta->estado;
        $this->carta_presentacion_id = $solicarta->carta_presentacion_id ?? null;

        //$this->created_at = $sede->created_at;
//$this->updated_at = $sede->updated_at;

    }

    public function resetForm(){
        $this->reset();
    }
}
