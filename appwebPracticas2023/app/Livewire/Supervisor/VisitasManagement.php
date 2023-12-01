<?php

namespace App\Livewire\Supervisor;

use App\Models\Visita;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class VisitasManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    //public SedeForm $form;
    use Actions;
    public function render()
    {
        $visitas=Visita::where('visita_inicio','like','%'.$this->search.'%')->latest('id')->paginate(6);
        return view('livewire.supervisor.visitas-management', compact('visitas'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->visita->id)){
            Visita::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una foto de visita'
            );
        }else{
            $visita=Visita::find($this->form->visita->id);
            $visita->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se actualizo la foto de visita '
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Visita $visita){
        //$this->form=$period->toArray();
        $this->form->setForm($visita);
        $this->isOpen=true;
    }

    public function destroy(Visita $visita){
        $visita->delete();
    }
}
