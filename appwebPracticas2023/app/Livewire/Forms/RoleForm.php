<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;
use Spatie\Permission\Models\Role;


class RoleForm extends Form
{
    public ?Role $role;

    #[Rule('required|min:5')]
    public $name;

    #[Rule('required|min:1')]
    public $guard_name;

    public function setForm(Role $role){
        $this->role = $role;
        $this->name = $role->name;
        $this->guard_name = $role->guard_name;
    }

    public function resetForm(){
        $this->reset();
    }
}
