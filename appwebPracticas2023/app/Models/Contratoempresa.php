<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratoempresa extends Model
{
    use HasFactory;

    public function cartaculminacion(){
        return $this->belongToMany(Cartaculminacion::class);
    }
}
