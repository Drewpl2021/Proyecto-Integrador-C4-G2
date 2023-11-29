<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    public function index(){
        $convocatorias=Convocatoria::all();
        return response()->json($convocatorias);
    }

    public function store(Request $request){
        $convocatorias=Convocatoria::create($request->all());
        return response()->json([
            'message'=>"Registro insertado correctamente",
            'convocatoria'=>$convocatorias
        ],200);
    }

    public function update(Request $request,Convocatoria $convocatoria){
        $convocatoria->update($request->all());
        return response()->json([
            'message'=>"Registro editado correctamente",
            'convocatoria'=>$convocatoria
        ],200);
    }

    public function destroy(Convocatoria $convocatoria){
        $convocatoria->delete();
        return response()->json([
            'message'=>"Registro eliminado correctamente"
        ],200);
    }

    public function show(Convocatoria $convocatoria){
        return response()->json($convocatoria);
    }
}
