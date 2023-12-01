<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\GestionplanForm;
use App\Models\Gestionarplan;
use App\Models\student;
use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class GestionplanManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $selectroles;
    public $adjuntar_plan;
    public $student_id;
    public $actividades;
    public $horas;
    public $students;
    public GestionplanForm $form;
    use Actions;
    use WithFileUploads;


    public function render()
    {
        $gestionplanes = Gestionarplan::where('estado', 'like', '%' . $this->search . '%')->latest('id')->paginate(6);
        $users = User::all();
        return view('livewire.student.gestionplan-management', compact('gestionplanes', 'users'));
    }


    public function create()
    {
        $this->isOpen = true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store()
    {

        if ($this->form->adjuntar_plan) {
            $file = $this->form->adjuntar_plan;
            $path = $file->storeAs('planes', $file->getClientOriginalName(), 'public');
            $this->form->adjuntar_plan = $path;
        }

        Gestionarplan::create([
            'adjuntarplan' => $this->form->adjuntar_plan, // Esto guardará la ruta del archivo en la base de datos
            'user_id' => $this->form->user_id, // Asegúrate de que este valor se está estableciendo correctamente
            // Asegúrate de agregar todos los campos necesarios aquí
        ]);

        $this->dialog()->success(
            $title = 'Mensaje del sistema',
            $description = 'Carta de Aceptacion Subida Correctamente'
        );

        $this->reset(['isOpen']);
    }

    public function edit(Gestionarplan $contratoempresa)
    {
        //$this->form=$period->toArray();
        $this->form->setForm($contratoempresa);
        $this->isOpen = true;
    }

    public function destroy(Gestionarplan $contratoempresa)
    {
        $contratoempresa->delete();
    }

}
