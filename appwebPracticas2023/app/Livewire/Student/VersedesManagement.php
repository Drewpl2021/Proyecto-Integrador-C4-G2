<?php

namespace App\Livewire\Student;

use App\Models\Sede;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class VersedesManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    //public SubirsedeForm $form;
    use Actions;
    public function render()
    {
        $versedes = Sede::where('razon_social', 'like', '%' . $this->search . '%')->orderBy('id', 'asc')->paginate(6);
        $ultimas = Sede::paginate(5);
        return view('livewire.student.versedes-management', compact('versedes', 'ultimas'));
    }

}
