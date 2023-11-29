<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\SedeForm;
use App\Models\Sede;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class SedeManagemebt extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public SedeForm $form;
    use Actions;
    public function render()
    {
        $sedes = Sede::where('razon_social', 'like', '%' . $this->search . '%')->orderBy('id', 'asc')->paginate(6);
        return view('livewire.admin.sede-managemebt', compact('sedes'));
    }
    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->sede->id)){
            Sede::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una Sede'
            );
        }else{
            $sede=Sede::find($this->form->sede->id);
            $sede->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Sede Actualizada '
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Sede $sede){
        //$this->form=$period->toArray();
        $this->form->setForm($sede);
        $this->isOpen=true;
    }

    public function destroy(Sede $sede){
        $sede->delete();
    }
}
