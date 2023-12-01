<?php

namespace App\Livewire\Coordinador;

use App\Models\Visita;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class VisitasManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    //public GinduccionForm $form;
    use Actions;
    public function render()
    {
        $visitas = Visita::where('visita_inicio', 'like', '%' . $this->search . '%')->orderBy('id', 'asc')->latest('id')->paginate(6);
        return view('livewire.coordinador.visitas-management',compact('visitas'));
    }
}
