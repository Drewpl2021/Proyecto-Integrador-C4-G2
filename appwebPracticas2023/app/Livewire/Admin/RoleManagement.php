<?php

namespace App\Livewire\Admin;

use App\Livewire\Forms\RoleForm;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;
use Spatie\Permission\Models\Role;

class RoleManagement extends Component
{
    use WithPagination;
    public $isOpen=false;
    public $search;
    public $selectroles;
    public RoleForm $form;
    use Actions;
    public function render(){
        $roles=Role::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);

        return view('livewire.admin.role-management',compact('roles'));
    }
    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }
    public function store(){
        $this->validate();

        if(!isset($this->form->role->id)){
            Role::create([
                'name'=>$this->form->name,
                'guard_name'=>$this->form->guard_name,

            ]);
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $role=Role::find($this->form->role->id);
            $role->update([
                'name'=>$this->form->name,
                'guard_name'=>$this->form->guard_name,

            ]);

            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(Role $role){
        //$this->form=$period->toArray();
        $this->form->setForm($role);
        $this->isOpen=true;

    }

    public function destroy(Role $role){
        $role->delete();
    }
}
