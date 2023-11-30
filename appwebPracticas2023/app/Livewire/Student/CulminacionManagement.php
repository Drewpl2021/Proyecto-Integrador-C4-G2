<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\CulminacionForm;
use App\Models\Cartaculminacion;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CulminacionManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public CulminacionForm $form;
    use Actions;
    public function render(){
        $culminacion=Cartaculminacion::where('sede_id','like','%'.$this->search.'%')->latest('id')->paginate(6);
        return view('livewire.student.culminacion-management', compact('culminacion'));
    }
    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->culminacion->id)){
            Cartaculminacion::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Ficha Culminacion Creada Correctamente'
            );
        }else{
            $culminacion=Cartaculminacion::find($this->form->culminacion->id);
            $culminacion->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se Actualizo Correctamente'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Cartaculminacion $culminacion){
        //$this->form=$period->toArray();
        $this->form->setForm($culminacion);
        $this->isOpen=true;
    }

    public function destroy(Cartaculminacion $culminacion){
        $culminacion->delete();
    }
}
