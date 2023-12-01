<?php

namespace App\Livewire\Supervisor;

use App\Livewire\Forms\EvaluacionForm;
use App\Models\Evaluacione;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class EvaluacionManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public EvaluacionForm $form;
    use Actions;


    public function render()
    {
        $evaluaciones=Evaluacione::where('adjuntar_evaluacion','like','%'.$this->search.'%')->latest('id')->paginate(6);
        return view('livewire.supervisor.evaluacion-management', compact('evaluaciones'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->evaluacione->id)){
            Evaluacione::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una foto de visita'
            );
        }else{
            $evaluacion=Evaluacione::find($this->form->evaluacione->id);
            $evaluacion->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se actualizo la foto de visita '
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Evaluacione $evaluacion){
        //$this->form=$period->toArray();
        $this->form->setForm($evaluacion);
        $this->isOpen=true;
    }

    public function destroy(Evaluacione $evaluacion){
        $evaluacion->delete();
    }

}
