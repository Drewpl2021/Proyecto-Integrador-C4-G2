<?php

namespace App\Http\Controllers;

use App\Models\Cartaculminacion;
use Illuminate\Http\Request;

class CulminacionController extends Controller
{
    public function index(){
        $culminacions=Cartaculminacion::all();
        return response()->json([$culminacions]);
    }
    public function store(Request $request){
        $culminacions=Cartaculminacion::create($request->all());
        $request->file('culmi')->storage('public');
        return response()->json([
            'message="Registro insertado correctamente',
            'culminacion'=>$culminacions
        ],200);

    }
    public function update(Request $request, Cartaculminacion $culminacion){
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);
        $pdf = $request->file('pdf')->getContent();
        $culminacion->update($request->all());
        $request->file('culmi')->storage('public');
         return response()->json([
             'message="Registro editado correctamente',
             'culminacion'=>$culminacion
        ],200);

    }
    public function destroy(Cartaculminacion $culminacion){
        $culminacion->delete();
        return response()->json([
            'message="Registro eliminado correctamente',
        ],200);
    }
    public function show(Cartaculminacion $culminacion){
        return response()->json($culminacion);
    }
}
