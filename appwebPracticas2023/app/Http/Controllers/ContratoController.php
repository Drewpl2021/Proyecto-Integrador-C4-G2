<?php

namespace App\Http\Controllers;

use App\Models\Contratoempresa;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    public function index(){
        $contratos=Contratoempresa::all();
        return response()->json([$contratos]);
    }
    public function store(Request $request){
        $contratos=Contratoempresa::create($request->all());
        return response()->json([
            'message="Registro insertado correctamente',
            'contrato'=>$contratos
        ],200);
    }
    public function update(Request $request, Contratoempresa $contrato){
        $contrato->update($request->all());
        return response()->json([
            'message="Registro editado correctamente',
            'contrato'=>$contrato
        ],200);
    }
    public function destroy(Contratoempresa $contrato){
        $contrato->delete();
        return response()->json([
            'message="Registro eliminado correctamente',
        ],200);
    }
    public function show(Contratoempresa $contrato){
        return response()->json($contrato);
    }
}
