<?php

namespace App\Livewire\Forms;

use App\Models\Visita;
use Livewire\Attributes\Rule;
use Livewire\Form;

class VisitaForm extends Form{
    public ?Visita $visita;

    #[Rule('required|min:')]
    public $visita_inicio;
    #[Rule('required|min:')]
    public $visita_intermedio;
    #[Rule('required|min:')]
    public $visita_final;
    #[Rule('required|min:')]
    public $encargado_id;



    public function setForm(Visita $visita){
        $this->visita = $visita;
        $this->visita_inicio = $visita;
        $this->visita_intermedio = $visita;
        $this->visita_final = $visita;
        $this->encargado_id = $visita;
    }

    public function resetForm(){
        $this->reset();
    }
}
