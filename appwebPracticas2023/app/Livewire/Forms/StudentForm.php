<?php

namespace App\Livewire\Forms;

use App\Models\Gestionarplan;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Form;


class StudentForm extends Form
{
    use WithFileUploads;
    public ?Gestionarplan $gestionarplans;

    #[Rule('required|min:1')]
    public $estado;
    #[Rule('required'), Rule('file'), Rule('max:5120')] // max size 1MB
    public $adjuntarplan;


    //#[Rule('required|min:4')]
    //public $created_at;

    //#[Rule('required|min:4')]
    //public $updated_at;




    public function setForm(Gestionarplan $gestionarplans)
    {
        $this->gestionarplans = $gestionarplans;
        $this->estado = $gestionarplans->estado;
        $this->adjuntarplan = $gestionarplans->adjuntarplan;
        //$this->created_at = $sede->created_at;
        //$this->updated_at = $sede->updated_at;

    }

    public function resetForm()
    {
        $this->reset();
    }
}
