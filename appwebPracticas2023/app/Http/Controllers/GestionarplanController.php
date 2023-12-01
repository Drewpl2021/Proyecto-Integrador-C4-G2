<?php

namespace App\Http\Controllers;

use App\Models\Gestionarplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GestionarplanController extends Controller
{

    public function download($pdf)
    {
        return Storage::download($pdf);
    }
}


