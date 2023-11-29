<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\ConvocatoriaForm;
use App\Models\Convocatoria;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class ConvocatoriaManagemebt extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public ConvocatoriaForm $form;
    use Actions;
    public function render(){
        $convocatorias=Convocatoria::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);
        return view('livewire.admin.convocatoria-managemebt', compact('convocatorias'));
    }
    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->convocatoria->id)){
            Convocatoria::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Convocatoria Creada Correctamente'
            );
        }else{
            $convocatoria=Convocatoria::find($this->form->convocatoria->id);
            $convocatoria->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se Actualizo Correctamente'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Convocatoria $convocatoria){
        //$this->form=$period->toArray();
        $this->form->setForm($convocatoria);
        $this->isOpen=true;
    }

    public function destroy(Convocatoria $convocatoria){
        $convocatoria->delete();
    }
}
