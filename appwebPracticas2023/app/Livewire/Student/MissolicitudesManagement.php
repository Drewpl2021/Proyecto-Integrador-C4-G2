<?php

namespace App\Livewire\Student;

use App\Models\Solicitarcarta;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class MissolicitudesManagement extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $selectedSedeId;
    public $selectroles;
    //public Iind $form;
    use Actions;
    public function render()
    {
        $missolicitudes = Solicitarcarta::where('user_id', auth()->id())->orderBy('id', 'asc')->paginate(6);
        return view('livewire.student.missolicitudes-management', compact('missolicitudes'));
    }
}
