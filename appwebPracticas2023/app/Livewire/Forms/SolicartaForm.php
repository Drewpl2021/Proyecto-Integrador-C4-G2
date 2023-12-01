<?php

namespace App\Livewire\Forms;

use App\Models\Sede;
use App\Models\Solicitarcarta;
use Livewire\Attributes\Rule;
use Livewire\Form;

class SolicartaForm extends Form{
    public ?Solicitarcarta $solicarta;

    #[Rule('required|min:2')]
    public $posibles_actividades;

    #[Rule('required|min:2')]
    public $area_competencia;

    #[Rule('min:1')]
    public $estado;

    #[Rule('min:1')]
    public $carta_presentacion_id;

    #[Rule('min:1')]
    public $user_id;

    #[Rule('min:1')]
    public $sede_id;





    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Solicitarcarta $solicarta){
        $this->solicarta = $solicarta;
        $this->posibles_actividades = $solicarta->posibles_actividades;
        $this->area_competencia = $solicarta->area_competencia;
        $this->estado = $solicarta->estado;
        $this->carta_presentacion_id = $solicarta->carta_presentacion_id ;
        $this->user_id = $solicarta->user_id;
        $this->sede_id = $solicarta->sede_id;

        //$this->created_at = $sede->created_at;
//$this->updated_at = $sede->updated_at;

    }

    public function resetForm(){
        $this->reset();
    }
}
