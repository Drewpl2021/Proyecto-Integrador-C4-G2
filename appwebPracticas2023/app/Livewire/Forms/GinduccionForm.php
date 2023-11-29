<?php

namespace App\Livewire\Forms;

use App\Models\Induccion;
use App\Models\ginduccion;
use Livewire\Attributes\Rule;
use Livewire\Form;

class GinduccionForm extends Form{
    public ?Induccion $ginduccion;

    #[Rule('required|min:4')]
    public $name;

    #[Rule('required|min:4')]
    public $detalle;

    #[Rule('required|min:5')]
    public $encargardo;

    #[Rule('required|min:4')]
    public $hora;

    #[Rule('required|min:4')]
    public $fecha;

    #[Rule('required|min:4')]
    public $zoom;


    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Induccion $ginduccion){
        $this->ginduccion = $ginduccion;
        $this->name = $ginduccion->name;
        $this->detalle = $ginduccion->detalle;
        $this->encargardo = $ginduccion->encargardo;
        $this->hora = $ginduccion->hora;
        $this->fecha = $ginduccion->fecha;
        $this->zoom = $ginduccion->zoom;

        //$this->created_at = $ginduccion->created_at;
//$this->updated_at = $ginduccion->updated_at;

    }

    public function resetForm(){
        $this->reset();
    }
}
