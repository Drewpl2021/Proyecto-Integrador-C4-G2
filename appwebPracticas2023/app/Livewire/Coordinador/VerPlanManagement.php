<?php

namespace App\Livewire\Coordinador;

use App\Livewire\Forms\GestionplanForm;
use App\Livewire\Forms\ModeloplanForm;
use App\Models\Gestionarplan;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use WireUi\Traits\Actions;

class VerPlanManagement extends Component
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
    public $estado;
    public $file;
    public $modelo_plan;
    public $formato_plan;
    public ModeloplanForm $form;
    use Actions;
    use WithFileUploads;

    public function render()
    {
        $formatoplans = Gestionarplan::where('estado', 'like', '%' . $this->search . '%')->latest('id')->paginate(6);
        return view('livewire.coordinador.ver-plan-management', compact('formatoplans'));
    }

    public function show()
    {
        $gestionarplans = Gestionarplan::latest()->first();
        return view('coordinador.cartaaceptacions.show', compact('gestionarplans'));
    }

    public function vercarta()
    {
        $cartaaceptacions = Gestionarplan::all();
        //dd($cartaaceptacions);
        $pdf = FacadePdf::loadView('coordinador.reporte-carta-aceptacion', compact('cartaaceptacions'));
        //return $pdf->download('reporte.resultado.pdf');
        return $pdf->stream();
    }

    public function save($id)
    {
        $cartaaceptacion = Gestionarplan::find($id);

        if ($cartaaceptacion) {
            $cartaaceptacion->estado = $this->estado;
            $cartaaceptacion->save();

            // Muestra un mensaje de éxito
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Se Actualizo Correctamente'
            );
        } else {
            // Maneja el caso en que no se encuentra el registro
            $this->dialog()->error(
                $title = 'Mensaje del sistema',
                $description = 'No se encontró la Carta de Aceptación con el ID especificado.'
            );
        }
    }

    public function uploadFile()
    {
        $this->validate([
            'form.formato_plan' => 'required|file', // valida que se haya seleccionado un archivo
        ]);

        if ($this->form['formato_plan']) {
            $path = $this->form['formato_plan']->storeAs('modeloplanes', $this->form['formato_plan']->getClientOriginalName(), 'public');
            Gestionarplan::create([
                'formato_plan' => $path,
            ]);

            session()->flash('success', 'Archivo subido con éxito');
        }

        $this->reset(['isOpen', 'form']);
    }

    public function openModal()
    {
        $this->isOpen = true;
    }


    public function saveFile()
    {
        $this->validate([
            'form.formato_plan' => 'required|file', // valida que se haya seleccionado un archivo
        ]);

        if ($this->form->formato_plan) {
            $path = $this->form->formato_plan->store('public/planes');
            Gestionarplan::create([
                'formato_plan' => $path,
            ]);

            session()->flash('success', 'Archivo subido con éxito');
        }

        $this->reset(['isOpen', 'form']);
    }
}
