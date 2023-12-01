<?php

namespace App\Livewire\Coordinador;

use App\Models\Induccion;
use App\Models\ParticipantesInduccion;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class PinduccionManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $induccionId;
    public $crishoshomo;
    public $showOptions = false;
    //public SedeForm $form;
    use Actions;
    public $asistencia = [];

    public function render()
    {

        $croshoshomo = $this->induccionId;
        $pinduccions = ParticipantesInduccion::where('induccion_id', $croshoshomo)
            ->whereHas('users', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')->orderBy('id', 'asc');
            })
            ->latest('id')
            ->paginate(6);

        return view('livewire.coordinador.pinduccion-management', compact('pinduccions'));
    }

    public function mount()
    {
        $this->induccionId = request()->input('induccion');
        //dd($this->induccionId);  Volcado de la variables para depuración
    }

    public function toggleOptions() {
        $this->showOptions = !$this->showOptions;
        if (!$this->showOptions) {

            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Induccion Actualizada '
            );
        }

    }

    public function destroy(ParticipantesInduccion $pinduccion)
    {
        $pinduccion->delete();
    }
    public function saveChanges()
    {
        foreach ($this->asistencia as $id => $asistencia) {
            $pinduccion = ParticipantesInduccion::find($id);
            $pinduccion->asistencia = $asistencia;
            $pinduccion->save();
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Induccion Actualizada '
            );
        }
    }
    public function updateAsistencia($id, $asistencia)
{
    $pinduccion = ParticipantesInduccion::find($id);
    $pinduccion->asistencia = $asistencia;
    $pinduccion->save();

}
}
