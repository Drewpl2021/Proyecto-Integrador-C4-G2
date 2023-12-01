<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\ContratoForm;
use App\Models\Cartaaceptacion;
use App\Models\Contratoempresa;
use App\Models\Sede;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class ContratoManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $selectroles;
    public $adjuntar_carta;
    public $sede_id;
    public $cartaaceptacion;
    public $cartasaceptacions;
    public ContratoForm $form;
    use Actions;
    use WithFileUploads;

    public function render()
    {
        $contratoempresas = Contratoempresa::where('cartaaceptacion_id', 'like', '%' . $this->search . '%')->latest('id')->paginate(6);
        return view('livewire.student.contrato-management', compact('contratoempresas'));
        //return view('livewire.student.subir-contrato');
    }

    public function create()
    {
        $this->isOpen = true;
        $this->form->resetForm();
        $this->resetValidation();
    }
    public function mount()
    {
        $this->cartasaceptacions = Cartaaceptacion::all();
    }

    public function store()
    {

        if ($this->form->adjuntar_contrato) {
            $file = $this->form->adjuntar_contrato;
            $path = $file->storeAs('public', $file->getClientOriginalName(), 'public');
            $this->form->adjuntar_contrato = $path;
        }

        Contratoempresa::create([
            'adjuntar_contrato' => $this->form->adjuntar_contrato, // Esto guardará la ruta del archivo en la base de datos
            'cartaaceptacion_id' => $this->form->cartaaceptacion_id,
            // Asegúrate de agregar todos los campos necesarios aquí
        ]);

        $this->dialog()->success(
            $title = 'Mensaje del sistema',
            $description = 'Carta de Aceptacion Subida Correctamente'
        );

        $this->reset(['isOpen']);
    }

    public function edit(Contratoempresa $contratoempresa)
    {
        //$this->form=$period->toArray();
        $this->form->setForm($contratoempresa);
        $this->isOpen = true;
    }

    public function destroy(Contratoempresa $contratoempresa)
    {
        $contratoempresa->delete();
    }
}
