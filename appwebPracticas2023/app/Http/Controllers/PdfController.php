<?php

namespace App\Http\Controllers;

use App\Models\Gestionarplan;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        $pdf = $request->file('pdf')->getContent();

        // Aquí puedes guardar el contenido del PDF en tu base de datos
        // Por ejemplo:
        Gestionarplan::create(['pdf' => $pdf]);

        return back()->with('success', 'You have successfully upload file.');
    }

    public function view($id)
    {
        $gestionarplan = Gestionarplan::findOrFail($id);

        return response($gestionarplan->pdf)
            ->header('Content-Type', 'application/pdf');
    }

    public function download($id)
    {
        $gestionarplan = Gestionarplan::findOrFail($id);

        return response($gestionarplan->pdf)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="download.pdf"');
    }
}
