<?php

namespace App\Livewire\Forms;

use App\Models\Cartaaceptacion;
use App\Models\Contratoempresa;
use App\Models\Convocatoria;

use App\Models\Season;
use Livewire\Attributes\Rule;
use Livewire\Form;

class ContratoForm extends Form{
    public ?Contratoempresa $contratoempresa;

    #[Rule('required|file|mimes:pdf')]
    public $adjuntar_contrato;

    #[Rule('required|min:1')]
    public $cartaaceptacion_id;


    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Contratoempresa $contratoempresa){
        $this->adjuntar_contrato = $contratoempresa->adjuntar_contrato;
        $this->cartaaceptacion_id = $contratoempresa->cartaaceptacion_id;
        //$this->created_at = $convocatoria->created_at;
        //$this->updated_at = $convocatoria->updated_at;
    }

    public function resetForm(){
        $this->reset();
    }
}
