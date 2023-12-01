<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartaaceptacion extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
{
    return $this->belongsTo(User::class);
}

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }

    public function contratoempresa()
    {
        return $this->belongsTo(Contratoempresa::class);
    }


}
