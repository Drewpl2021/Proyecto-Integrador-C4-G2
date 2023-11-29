<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\SedeForm;
use App\Livewire\Forms\SolicartaForm;
use App\Livewire\Forms\SubirsedeForm;
use App\Models\Sede;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class SubirsedeManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $shOpen = false;
    public $search;
    public $selectedSedeId;
    public SubirsedeForm $form;
    //public SolicartaForm $formas;
    use Actions;
    public function render()
    {
        $subirsedes = Sede::where('razon_social', 'like', '%' . $this->search . '%')->orderBy('id', 'asc')->paginate(8);
        $selectedSede = null;
        if ($this->selectedSedeId) {
            $selectedSede = Sede::find($this->selectedSedeId);
        }
        return view('livewire.student.subirsede-management', compact('subirsedes', 'selectedSede'));
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

        if (!isset($this->form->subirsede->id)) {
            Sede::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una Sede'
            );
        } else {
            $subirsede = Sede::find($this->form->subirsede->id);
            $subirsede->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Sede Actualizada '
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Sede $subirsede)
    {
        //$this->form=$period->toArray();
        $this->form->setForm($subirsede);
        $this->isOpen = true;
    }

    public function destroy(Sede $subirsede)
    {
        $subirsede->delete();
    }

    public function selectSede($sedeId)
    {
        $this->selectedSedeId = $sedeId;
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->selectedSedeId = null; // Restablece selectedSedeId
        $this->isOpen = false;
    }
    public function solicarta(){
        $this->shOpen = true;
    }
    public function guardar()
    {
        $this->validate();

        if (!isset($this->formas->subirsede->id)) {
            Sede::create($this->formas->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una Sede'
            );
        } else {
            $subirsede = Sede::find($this->form->subirsede->id);
            $subirsede->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Sede Actualizada '
            );
        }
        $this->reset(['shOpen']);
    }

}
