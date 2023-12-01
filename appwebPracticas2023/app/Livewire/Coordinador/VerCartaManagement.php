<?php

namespace App\Livewire\Coordinador;

use App\Livewire\Forms\CartaaceptacionForm;
use App\Models\Cartaaceptacion;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class VerCartaManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public $selectroles;
    public $adjuntar_carta;
    public $student_id;
    public $sede_id;
    public $cartaaceptacion;
    public CartaaceptacionForm $form;
    public $estado;
    use Actions;
    use WithFileUploads;

    public function render()
    {
        $cartaaceptacions=Cartaaceptacion::where('user_id','like','%'.$this->search.'%')->latest('id')->paginate(6);
        return view('livewire.coordinador.ver-carta-management',compact('cartaaceptacions'));
    }

    public function show()
    {
        $cartaaceptacions = Cartaaceptacion::latest()->first();
        return view('coordinador.cartaaceptacions.show', compact('cartaaceptacions'));
    }

    public function vercarta(){
        $cartaaceptacions=Cartaaceptacion::all();
        //dd($cartaaceptacions);
        $pdf = FacadePdf::loadView('coordinador.reporte-carta-aceptacion',compact('cartaaceptacions'));
        //return $pdf->download('reporte.resultado.pdf');
        return $pdf ->stream();
    }

    public function download($id)
    {
        $cartaaceptacions = Cartaaceptacion::find($id);

        if ($cartaaceptacions) {
            $pathToFile = storage_path('public/storage/cartasaceptacions/' . $cartaaceptacions->adjuntar_carta);
            return response()->download($pathToFile);
        } else {
            // Maneja el caso en que no se encuentra el registro
            session()->flash('error', 'No se encontró la Carta de Aceptación con el ID especificado.');
        }
    }

    public function save($id)
    {
        $cartaaceptacion = Cartaaceptacion::find($id);

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

}
