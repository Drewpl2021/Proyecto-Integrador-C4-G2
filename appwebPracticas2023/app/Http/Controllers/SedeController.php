<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index(){
        $sedes=Sede::all();
        return response()->json([$sedes]);
    }
    public function store(Request $request){
        $sedes=Sede::create($request->all());
        return response()->json([
            'message="Registro insertado correctamente',
            'sede'=>$sedes
        ],200);
    }
    public function update(Request $request, Sede $sede){
        $sede->update($request->all());
        return response()->json([
            'message="Registro editado correctamente',
            'sede'=>$sede
        ],200);
    }
    public function destroy(Sede $sede){
        $sede->delete();
        return response()->json([
            'message="Registro eliminado correctamente',
        ],200);
    }
    public function show(Sede $sede){
        return response()->json($sede);
    }
}
