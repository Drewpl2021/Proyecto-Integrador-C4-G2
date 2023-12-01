<?php

namespace App\Livewire\Student;

use App\Livewire\Forms\CartaaceptacionForm;
use App\Models\Cartaaceptacion;
use App\Models\Sede;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class CartaaceptacionManagement extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $selectroles;
    public $adjuntar_carta;
    public $student_id;
    public $sede_id;
    public $cartaaceptacion;
    public $sedes;
    public CartaaceptacionForm $form;
    use Actions;
    use WithFileUploads;

    public function render()
    {
        $cartaaceptacions = Cartaaceptacion::where('user_id', 'like', '%' . $this->search . '%')->latest('id')->paginate(6);
        return view('livewire.student.cartaaceptacion-management', compact('cartaaceptacions'));
    }
    public function create()
    {
        $this->isOpen = true;
        $this->form->resetForm();
        $this->resetValidation();
    }


    public function mount()
    {
        $this->sedes = Sede::all();
    }

    public function store()
    {

        if ($this->form->adjuntar_carta) {
            $file = $this->form->adjuntar_carta;
            $path = $file->storeAs('public', $file->getClientOriginalName(), 'public');
            $this->form->adjuntar_carta = $path;
        }

        Cartaaceptacion::create([
            'adjuntar_carta' => $this->form->adjuntar_carta, // Esto guardará la ruta del archivo en la base de datos
            'user_id' => auth()->id(),
            'sede_id' => $this->form->sede_id,
            // Asegúrate de agregar todos los campos necesarios aquí
        ]);

        $this->dialog()->success(
            $title = 'Mensaje del sistema',
            $description = 'Carta de Aceptacion Subida Correctamente'
        );

        $this->reset(['isOpen']);
    }


    public function edit(Cartaaceptacion $cartaaceptacions)
    {
        //$this->form=$period->toArray();
        $this->form->setForm($cartaaceptacions);
        $this->isOpen = true;
    }

    public function destroy(Cartaaceptacion $cartaaceptacions)
    {
        $cartaaceptacions->delete();
    }
}
