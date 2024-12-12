<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options; // Importación de la clase Options


class CVController extends Controller
{

    public function edit($id)
    {
        $cv = CV::findOrFail($id);
        return view('cvs.edit', compact('cv'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|max:255',
            'personal_info' => 'required',
            'work_experience' => 'required',
            'education' => 'required',
            'skills' => 'required',
            'languages' => 'required',
            'certifications' => 'required',
        ]);
    
        // Buscar el currículum por ID
        $cv = CV::findOrFail($id);
    
        // Actualizar los datos del currículum
        $cv->update($validated);
    
        // Redirigir a la página de listado de currículums
        return redirect()->route('cvs.index');
    }
    
    

    public function destroy($id)
{
    $cv = CV::findOrFail($id);  // Buscar el currículum por ID
    $cv->delete();  // Eliminarlo de la base de datos

    return redirect()->route('cvs.index')->with('success', 'Currículum eliminado correctamente.');
}


    public function index()
    {
        $cvs = CV::where('user_id', auth()->id())->get();
        return view('cvs.index', compact('cvs'));
    }

    public function create()
    {
        return view('cvs.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|max:255',
            'personal_info' => 'required',
            'work_experience' => 'required',
            'education' => 'required',
            'skills' => 'required',
            'languages' => 'required',
            'certifications' => 'required',
        ]);
    
        // Asignar el ID del usuario autenticado
        $validated['user_id'] = auth()->id();
    
        // Crear el currículum en la base de datos
        CV::create($validated);
    
        // Redirigir a la página de listado de currículums
        return redirect()->route('cvs.index');
    }
    

    public function download($id)
    {
        // Encuentra el currículum por ID
        $cv = CV::findOrFail($id);
    
        // Crea una nueva instancia de Dompdf
        $dompdf = new Dompdf();
    
        // Configura las opciones de Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true); // Habilita HTML5
        $options->set('isPhpEnabled', true); // Habilita PHP dentro de la vista
        $dompdf->setOptions($options);
    
        // Cargar la vista para el PDF
        $pdfContent = view('cvs.pdf', compact('cv'))->render(); 
    
        // Cargar el contenido HTML al PDF
        $dompdf->loadHtml($pdfContent);
    
        // Establecer tamaño de papel A4 y orientación
        $dompdf->setPaper('A4', 'portrait');
    
        // Renderizar el PDF
        $dompdf->render();
    
        // Forzar la descarga del PDF
        return $dompdf->stream('curriculum_' . $cv->id . '.pdf', array("Attachment" => 1));
    }




}