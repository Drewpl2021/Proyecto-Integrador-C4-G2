<?php

namespace App\Livewire\Forms;

use App\Models\Cartaculminacion;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CulminacionForm extends Form
{
    public ?Cartaculminacion $culminacion;

    #[Rule('required|min:10')]
    public $descripcion;
    #[Rule('required|pdf|min:1')]
    public $adjuntarculminacion;
    #[Rule('required|min:1')]
    public $contratoempresa_id;

    public function setForm(Cartaculminacion $culminacion){
        // $this->sede_id = $culminacion->sede_id ?? null;
        $this->descripcion = $culminacion->descripcion;
        $this->adjuntarculminacion = $culminacion->adjuntarculminacion;
        $this->contratoempresa_id = $culminacion->contratoempresa_id;

    }

    public function resetForm(){
        $this->reset();
    }
}

