<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentConvocatory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function convocatoria()
    {
        return $this->belongsTo(Convocatoria::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
}
