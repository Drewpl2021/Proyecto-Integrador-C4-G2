<?php

namespace App\Livewire\Forms;

use App\Models\Convocatoria;

use App\Models\Season;
use Livewire\Attributes\Rule;
use Livewire\Form;

class ConvocatoriaForm extends Form{
    public ?Convocatoria $convocatoria;

    #[Rule('required|min:4')]
    public $name;

    #[Rule('required|min:5')]
    public $descripcion;

    #[Rule('required|min:4')]
    public $fecha_pulicacion;

    #[Rule('required|min:4')]
    public $fecha_fin;

    #[Rule('required|min:4')]
    public $requisitos;

    #[Rule('required|min:1')]
    public $cupos;

    #[Rule('required|min:4')]
    public $estado;

    #[Rule('required|min:4')]
    public $area_especialidad;

    #[Rule('required|min:1')]
    public $remuneracion;

    #[Rule('required|min:1')]
    public $sede_id;

    //#[Rule('required|min:4')]
//public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Convocatoria $convocatoria){
        $this->convocatoria = $convocatoria;
        $this->name = $convocatoria->name;
        $this->descripcion = $convocatoria->descripcion;
        $this->fecha_pulicacion = $convocatoria->fecha_pulicacion;
        $this->fecha_fin = $convocatoria->fecha_fin;
        $this->requisitos = $convocatoria->requisitos;
        $this->cupos = $convocatoria->cupos;
        $this->estado = $convocatoria->estado;
        $this->area_especialidad = $convocatoria->area_especialidad;
        $this->remuneracion = $convocatoria->remuneracion;
        $this->sede_id = $convocatoria->sede_id;
        //$this->created_at = $convocatoria->created_at;
//$this->updated_at = $convocatoria->updated_at;

    }

    public function resetForm(){
        $this->reset();
    }
}
