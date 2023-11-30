<?php

namespace App\Livewire\Student;

use App\Models\Induccion;
use App\Models\ParticipantesInduccion;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class IinduccionManagement extends Component
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
        $Iinduccions = Induccion::orderBy('id', 'asc')->paginate(6);
        $selectedSede = null;
        if ($this->selectedSedeId) {
            $selectedSede = Induccion::find($this->selectedSedeId);
        }
        return view('livewire.student.iinduccion-management', compact('Iinduccions','selectedSede'));
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

        if (!isset($this->form->Iinduccion->id)) {
            Induccion::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una Iinduccion'
            );
        } else {
            $Iinduccion = Induccion::find($this->form->Iinduccion->id);
            $Iinduccion->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Iinduccion Actualizada '
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->form->setForm($student);
        $this->isOpen = true;
    }
    public function inscribirse($studentId, $induccionId)
    {
        $existingInscripcion = ParticipantesInduccion::where('user_id', $studentId)
            ->where('induccion_id', $induccionId)
            ->first();

        if ($existingInscripcion) {
            $this->dialog()->error(
                $title = 'Mensaje del sistema',
                $description = 'Ya te has inscrito en esta inducción'
            );
        } else {
            $inscripcion = new ParticipantesInduccion();
            $inscripcion->user_id = $studentId;
            $inscripcion->induccion_id = $induccionId;
            $inscripcion->save();
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se incribio a esta Induccion'
            );
        }
    }
    public function destroyInscripcion($studentId, $induccionId)
    {
        $inscripcion = ParticipantesInduccion::where('user_id', $studentId)
            ->where('induccion_id', $induccionId)
            ->first();

        if ($inscripcion) {
            $inscripcion->delete();
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se anuló la inscripción'
            );
        } else {
            $this->dialog()->error(
                $title = 'Mensaje del sistema',
                $description = 'No se encontró la inscripción'
            );
        }
    }
    public function selectSede($sedeId)
    {
        $this->selectedSedeId = $sedeId;
        $this->isOpen = true;

    }
    public function closeModal()
    {
        $this->selectedSedeId = null; // Restablecer selectedSedeId
        $this->isOpen = false;
    }
    public function index()
    {
        $Iinduccion = Induccion::all(); // Obtiene todos los usuarios
        return view('welcome', ['Iinduccions' => $Iinduccion]); // Pasa los usuarios a la vista
    }
}
