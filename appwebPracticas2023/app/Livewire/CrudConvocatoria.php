<?php

namespace App\Livewire;

use App\Livewire\Forms\ConvocatoriaForm;
use App\Models\Convocatoria;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CrudConvocatoria extends Component
{
    public $isOpen=false;
    public $search;
    public ConvocatoriaForm $form;
    use Actions;
    use WithPagination;

    public function render()
    {
        $convocatorias = Convocatoria::where('name', 'like', '%' . $this->search . '%')->paginate();

        return view('livewire.crud-convocatoria', compact('convocatorias'));
    }
    public function create(){
        $this->isOpen=true;
        //$this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        //$this->validate();

        if(!isset($this->form->convocatoria->id)){
            Convocatoria::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $convocatoria=Convocatoria::find($this->form->convocatoria->id);
            $convocatoria->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }


    public function edit(Convocatoria $convocatoria)
    {
        $this->isOpen = True;
        $this->form->setForm($convocatoria);
        $this->resetValidation();
    }
    public function delete($id)
    {
        Convocatoria::find($id)->delete();
    }
}
