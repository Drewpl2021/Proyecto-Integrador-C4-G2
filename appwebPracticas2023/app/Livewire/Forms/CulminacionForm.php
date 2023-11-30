<?php

namespace App\Livewire\Forms;

use App\Models\Cartaculminacion;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CulminacionForm extends Form
{
    public ?Cartaculminacion $culminacion;

    #[Rule('required|min:1')]
    public $sede_id;

    public function setForm(Cartaculminacion $culminacion){
        $this->sede_id = $culminacion->sede_id ?? null;



    }

    public function resetForm(){
        $this->reset();
    }
}

