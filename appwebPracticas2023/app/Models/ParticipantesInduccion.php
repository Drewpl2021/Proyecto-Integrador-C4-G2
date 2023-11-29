<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantesInduccion extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function induccion()
    {
        return $this->belongsTo(Induccion::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
