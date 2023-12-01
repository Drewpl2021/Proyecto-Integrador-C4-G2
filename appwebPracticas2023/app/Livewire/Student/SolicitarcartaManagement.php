<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\SolicartaForm;
use App\Models\Solicitarcarta;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SolicitarcartaManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $sedeId;
    public SolicartaForm $form;
    use Actions;

    public function render()
    {
        $solicartas = Solicitarcarta::where('estado', 'like', '%' . $this->search . '%')->orderBy('id', 'asc')->paginate(6);
        return view('livewire.student.solicitarcarta-management', compact('solicartas'));
    }

    public function create()
    {
        $this->isOpen = true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store()
    {
        $form = $this->form;
        $validatedData = $this->validate([
            'form.posibles_actividades' => 'required',
            'form.area_competencia' => 'required',
        ]);

        // Check if the user has already made a request to the same location
        $existingRequest = Solicitarcarta::where('user_id', Auth::id())
            ->where('sede_id', $this->sedeId)
            ->first();

        if ($existingRequest) {
            // Show an error message
            $this->dialog()->error(
                $title = 'Mensaje del sistema',
                $description = 'Ya has solicitado a esta sede'
            );
        } else {
            $solicarta = new Solicitarcarta;
            $solicarta->posibles_actividades = $form->posibles_actividades;
            $solicarta->area_competencia = $form->area_competencia;
            $solicarta->carta_presentacion = 'null';
            $solicarta->sede_id = $this->sedeId;
            $solicarta->user_id = Auth::id();

            $solicarta->save();
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se envio tu solicitud'
            );
        }
    }
    public function mount()
    {
        $this->sedeId = request()->input('sede');
        //dd($this->sedeId);  Comprobar si el Id esta llegando bien
    }

    public function edit(Solicitarcarta $solicarta)
    {
        $this->form->setForm($solicarta);
        $this->isOpen = true;
    }

    public function destroy(Solicitarcarta $solicarta)
    {
        $solicarta->delete();
    }

}
