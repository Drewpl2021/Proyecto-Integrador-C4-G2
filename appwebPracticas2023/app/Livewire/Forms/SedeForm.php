<?php

namespace App\Livewire\Forms;

use App\Models\sede;
use Livewire\Attributes\Rule;
use Livewire\Form;

class SedeForm extends Form{
    public ?Sede $sede;

    #[Rule('required|min:4')]
    public $razon_social;
    #[Rule('required|min:4')]
    public $ruc;

    #[Rule('required|min:5')]
    public $representante;

    #[Rule('required|min:4')]
    public $trato;

    #[Rule('required|min:4')]
    public $cargo;

    #[Rule('required|min:4')]
    public $ubicacion;

    #[Rule('required|min:1')]
    public $convenio;

    #[Rule('required|min:4')]
    public $estado;


    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Sede $sede){
        $this->sede = $sede;
        $this->razon_social = $sede->razon_social;
        $this->ruc = $sede->ruc;
        $this->representante = $sede->representante;
        $this->trato = $sede->trato;
        $this->cargo = $sede->cargo;
        $this->ubicacion = $sede->ubicacion;
        $this->convenio = $sede->convenio;
        $this->estado = $sede->estado;
        //$this->created_at = $sede->created_at;
//$this->updated_at = $sede->updated_at;

    }

    public function resetForm(){
        $this->reset();
    }
}
