<?php

namespace App\Livewire\Student;

use App\Models\Convocatoria;
use App\Models\StudentConvocatory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class LconvocatoriaManagement extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $selectroles;
    //public Iind $form;
    use Actions;
    public function render()
    {
        $Iconvocatorias = Convocatoria::orderBy('id', 'asc')->paginate(6);
        return view('livewire.student.lconvocatoria-management', compact('Iconvocatorias'));
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

        if (!isset($this->form->Iconvocatoria->id)) {
            Convocatoria::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se añadio añadio una Iinduccion'
            );
        } else {
            $Iconvocatoria = Convocatoria::find($this->form->Iconvocatoria->id);
            $Iconvocatoria->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'lconvocatoria Actualizada '
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit($id)
    {
        $student = Convocatoria::findOrFail($id);
        $this->form->setForm($student);
        $this->isOpen = true;
    }
    public function inscribirse($studentId, $convocatoriaId)
    {
        $existingInscripcion = StudentConvocatory::where('user_id', $studentId)
            ->where('convocatoria_id', $convocatoriaId)
            ->first();

        if ($existingInscripcion) {
            $this->dialog()->error(
                $title = 'Mensaje del sistema',
                $description = 'Ya te has inscrito en esta inducción'
            );
        } else {
            $inscripcion = new StudentConvocatory();
            $inscripcion->user_id = $studentId;
            $inscripcion->convocatoria_id = $convocatoriaId;
            $inscripcion->save();
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se incribio a esta Induccion'
            );
        }
    }
    public function destroyInscripcion($studentId, $convocatoriaId)
    {
        $inscripcion = StudentConvocatory::where('user_id', $studentId)
            ->where('convocatoria_id', $convocatoriaId)
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
    public function index()
    {
        $Iconvocatoria = Convocatoria::all(); // Obtiene todos los usuarios
        return view('welcome', ['Iconvocatorias' => $Iconvocatoria]); // Pasa los usuarios a la vista
    }
}
