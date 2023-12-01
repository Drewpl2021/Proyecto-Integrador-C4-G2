<?php

namespace App\Livewire\Forms;

use App\Models\Evaluacione;
use Livewire\Attributes\Rule;
use Livewire\Form;

class EvaluacionForm extends Form{
    public ?Evaluacione $evaluacione;

    #[Rule('required|min:4')]
    public $adjuntar_evaluacion;
    #[Rule('required|min:4')]
    public $visita_id;


    public function setForm(Evaluacione $evaluacione){
        $this->adjuntar_evaluacion = $evaluacione->adjuntar_evaluacion;
        $this->visita_id = $evaluacione->visita_id;
    }

    public function resetForm(){
        $this->reset();
    }
}
