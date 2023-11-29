<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionarplan extends Model
{
    use HasFactory;

    protected $fillable = [
        'adjuntarplan',
        // ...otras propiedades que se pueden asignar en masa...
    ];
}
