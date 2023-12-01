<?php

namespace App\Livewire\Coordinador;

use App\Models\Sede;
use App\Models\Solicitarcarta;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use Livewire\WithFileUploads;


class ValidarcartasManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    use WithFileUploads;
    public $form = []; // Add this line
    use Actions;
    public function render()
    {
        $validarcartas = Solicitarcarta::where('estado', 'like', '%' . $this->search . '%')->orderBy('id', 'asc')->latest('id')->paginate(6);
        return view('livewire.coordinador.validarcartas-management', compact('validarcartas'));
    }
    public function store()
    {
        // Validate the form data
        $this->validate([
            'form.posibles_actividades' => 'required',
            'form.area_competencia' => 'required',
            'form.estado' => 'required',
            'form.carta_presentacion' => 'required|file',
            'form.user_id' => 'required',
            'form.sede_id' => 'required',
        ]);

        // Find the user by name
        $user = User::where('name', $this->form['user_id'])->first();
        if ($user) {
            $this->form['user_id'] = $user->id;
        }

        // Find the sede by razon_social
        $sede = Sede::where('razon_social', $this->form['sede_id'])->first();
        if ($sede) {
            $this->form['sede_id'] = $sede->id;
        }

        // Handle file upload
        if ($this->form['carta_presentacion']) {
            $file = $this->form['carta_presentacion'];
            $folderName = auth()->user()->id;
            $path = $file->storeAs('public', $file->getClientOriginalName(), 'public');
            $this->form['carta_presentacion'] = $path;
        }

        // If form has an id, update the record, else create a new one
        if (isset($this->form['id'])) {
            $solicitarcarta = Solicitarcarta::find($this->form['id']);
            $solicitarcarta->update($this->form);
        } else {
            Solicitarcarta::create($this->form);
        }

        // Close the modal
        $this->isOpen = false;
        $this->dialog()->success(
            $title = 'Mensaje del sistema',
            $description = 'Solicitud validada y Carta de presentacion Enviada'
        );
    }


    public function edit(Solicitarcarta $validarcarta)
    {
        $user = $validarcarta->user; // Load the associated user
        $sede = $validarcarta->sede; // Load the associated sede
        $this->form = $validarcarta->toArray();
        $this->form['user_id'] = $user->name; // Assign the user's name to the form
        $this->form['sede_id'] = $sede->razon_social; // Assign the sede's razon_social to the form
        $this->isOpen = true;
    }
}
