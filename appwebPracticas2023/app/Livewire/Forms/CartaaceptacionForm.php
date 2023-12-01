<?php

namespace App\Livewire\Forms;

use App\Models\Cartaaceptacion;
use App\Models\Convocatoria;

use App\Models\Season;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CartaaceptacionForm extends Form{
    public ?Cartaaceptacion $cartaaceptacions;

    #[Rule('required|file|mimes:pdf')]
    public $adjuntar_carta;

    #[Rule('required|min:1')]
    public $user_id;

    #[Rule('required|min:1')]
    public $sede_id;


    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Cartaaceptacion $cartaaceptacions){
        $this->adjuntar_carta = $cartaaceptacions->adjuntar_carta;
        $this->user_id = $cartaaceptacions->user_id;
        $this->sede_id = $cartaaceptacions->sede_id;
        //$this->created_at = $convocatoria->created_at;
        //$this->updated_at = $convocatoria->updated_at;
    }

    public function resetForm(){
        $this->reset();
    }
}
