<?php

namespace App\Livewire\Forms;

use App\Models\Sede;
use Livewire\Attributes\Rule;
use Livewire\Form;

class SubirsedeForm extends Form{
    public ?Sede $subirsede;

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



    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Sede $subirsede){
        $this->subirsede = $subirsede;
        $this->razon_social = $subirsede->razon_social;
        $this->ruc = $subirsede->ruc;
        $this->representante = $subirsede->representante;
        $this->trato = $subirsede->trato;
        $this->cargo = $subirsede->cargo;
        $this->ubicacion = $subirsede->ubicacion;

        //$this->created_at = $sede->created_at;
//$this->updated_at = $sede->updated_at;

    }

    public function resetForm(){
        $this->reset();
    }
}
