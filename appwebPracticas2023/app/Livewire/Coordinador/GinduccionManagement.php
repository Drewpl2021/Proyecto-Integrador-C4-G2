<?php

namespace App\Livewire\Coordinador;

use App\Livewire\Forms\GinduccionForm;
use App\Models\Induccion;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class GinduccionManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public GinduccionForm $form;
    use Actions;
    public function render()
    {
        $ginduccions = Induccion::where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'asc')->latest('id')->paginate(6);
        return view('livewire.coordinador.ginduccion-management', compact('ginduccions'));
    }
    public function create()
    {
        $this->isOpen = true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        if (!isset($this->form->ginduccion->id)) {
            Induccion::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una nueva induccion'
            );
        } else {
            $ginduccion = Induccion::find($this->form->ginduccion->id);
            $ginduccion->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Induccion Actualizada '
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Induccion $ginduccion)
    {
        //$this->form=$period->toArray();
        $this->form->setForm($ginduccion);
        $this->isOpen = true;
    }

    public function destroy(Induccion $ginduccion)
    {
        $ginduccion->delete();
    }
    public function showPinduccion($induccion_id)
    {
        return view('coordinador.pinduccion-management', ['induccion_id' => $induccion_id]);
    }
}
