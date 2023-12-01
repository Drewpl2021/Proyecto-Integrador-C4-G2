<?php

namespace App\Livewire\Coordinador;

use App\Models\Sede;
use App\Models\Solicitarcarta;
use Barryvdh\DomPDF\Pdf;
use Livewire\Component;

class GenerarcartapreManagement extends Component
{
    public $solicitarcartaId;

    public function render()
    {
        $groups = Sede::all();
        $solicitarcarta = Solicitarcarta::find(1);
        return view('livewire.coordinador.generarcartapre-management', compact('solicitarcarta'));
    }
    public function mount()
    {
        $this->solicitarcartaId =  request()->input('Solicitarcarta');
    }

    public function generateCartapre($Solicitarcarta)
    {
        $groups = Sede::all();
        $solicitarcarta = Solicitarcarta::find($Solicitarcarta);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('livewire.coordinador.generarcartapre-management', compact('groups', 'solicitarcarta'));
        return $pdf->stream();
    }

}
