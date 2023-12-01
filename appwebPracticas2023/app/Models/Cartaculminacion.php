<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartaculminacion extends Model
{
    use HasFactory;
    protected $guarded = ['culminacion'];

    protected $fillable=[
        'culmi','culminacion'
    ];

    public function contratoempresa(){
        return $this->belongToMany(Contratoempresa::class);
    }

}
