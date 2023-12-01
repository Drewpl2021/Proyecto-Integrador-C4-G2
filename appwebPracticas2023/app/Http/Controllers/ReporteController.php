<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function pdf(){
        return view('reportes.pdf');
    }

    public function index(){
        $repartos=Reporte::all();
        return response()->json([$repartos]);
    }
    public function store(Request $request){
        $repartos=Reporte::create($request->all());
        return response()->json([
            'message="Registro insertado correctamente',
            'reparto'=>$repartos
        ],200);
    }
    public function update(Request $request, Reporte $reparto){
        $reparto->update($request->all());
        return response()->json([
            'message="Registro editado correctamente',
            'reparto'=>$reparto
        ],200);
    }
    public function destroy(Reporte $reparto){
        $reparto->delete();
        return response()->json([
            'message="Registro eliminado correctamente',
        ],200);
    }
    public function show(Reporte $reparto){
        return response()->json($reparto);
    }
}
