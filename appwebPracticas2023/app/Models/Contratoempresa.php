<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratoempresa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Cartaaceptacion()
    {
        return $this->belongsTo(Cartaaceptacion::class);
    }
}
