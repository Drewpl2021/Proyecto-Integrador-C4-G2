<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitarcarta extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function sede()
    {
        return $this->belongsTo('App\Models\Sede');
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
public function student()
{
    return $this->belongsTo(Student::class);
}

}
