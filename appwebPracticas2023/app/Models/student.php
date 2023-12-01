<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Resto de tu código de modelo...
    public function solicitarcartas()
    {
        return $this->hasMany(Solicitarcarta::class);
    }
    public function cartaaceptacions()
    {
    return $this->hasMany(Cartaaceptacion::class);
    }
    public function gestionarplans(){
        return $this->belongsTo(Gestionarplan::class);

    }
}
