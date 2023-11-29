<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\StudentForm;
use App\Models\Gestionarplan;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;

class StudentManagement extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $isOpen=false;
    public $search;
    public $selectroles;
    public StudentForm $form;
    use Actions;
    public function render(){
        $gestionarplans=Gestionarplan::paginate(6);
        return view('livewire.student.student-management', compact('gestionarplans'));
    }
    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store()
    {
        $this->validate();

        if ($this->form->adjuntarplan) {
            $file = $this->form->adjuntarplan;
            $filePath = $file->store('public/documents');
            $this->form->adjuntarplan = $filePath;
        }

        if (!isset($this->form->gestionarplans->id)) {
            Gestionarplan::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'student Creada Correctamente'
            );
        } else {
            $gestionarplans = Gestionarplan::find($this->form->gestionarplans->id);
            $gestionarplans->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se Actualizo Correctamente'
            );
        }
        $this->reset(['isOpen']);
    }
    public function edit(Gestionarplan $gestionarplans){
        //$this->form=$period->toArray();
        $this->form->setForm($gestionarplans);
        $this->isOpen=true;
    }

    public function destroy(Gestionarplan $gestionarplans){
        $gestionarplans->delete();
    }
}
