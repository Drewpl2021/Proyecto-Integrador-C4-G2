<?php

namespace App\Livewire\Coordinador;

use App\Models\StudentConvocatory;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class Studentconv extends Component
{
    use WithPagination;
    public $isOpen = false;
    public $search;
    public $convocatoriaId;
    //public SedeForm $form;
    use Actions;
    public $estado = [];
    public function render()
    {
        $convoca= $this->convocatoriaId;
        $studentConvocatorias = StudentConvocatory::where('convocatoria_id', $convoca)->orderBy('id', 'asc')->paginate(6);
        return view('livewire.coordinador.studentconv',compact('studentConvocatorias'));
    }
    public function destroy(StudentConvocatory $studentConvocatorias)
    {
        $studentConvocatorias->delete();
    }
    public function mount()
    {
        $this->convocatoriaId = request()->input('convocatorias');
        //dd($this->induccionId);  par verificar si esta llegado el numero
    }

    //recepcionar el id que estas mandando
    public function saveChanges()
    {
        foreach ($this->estado as $id => $estado) {
            $pinduccion = StudentConvocatory::find($id);
            $pinduccion->estado = $estado;
            $pinduccion->save();
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Induccion Actualizada '
            );
        }
    }
}
