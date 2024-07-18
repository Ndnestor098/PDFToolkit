<?php

namespace App\Http\Controllers;

use App\Services\PDFServices;
use App\Services\ReaderServices;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function __invoke(Request $request, PDFServices $services, ReaderServices $read)
    {
        $data = $request->json()->all();

        // $data = $read->readExcel('public/file/prueba.xlsx');

        // Verificar si se obtuvo correctamente el JSON
        if (!$data || !is_array($data)) {
            return response()->json(['error' => 'Los datos JSON no son válidos.'], 400);
        }

        // Crear la ruta usando public_path
        $services->pathImage($data);

        // Opcional: Configurar opciones adicionales para DomPDF
        $options = [
            'isPhpEnabled' => true,
            'isHtml5ParserEnabled' => true,
        ];

        // Crear el PDF usando laravel-dompdf
        $pdf = PDF::loadView('pdf.pdf', compact('data'), $options);
        
        return $pdf->download('template.pdf');
    }

    public function sendJSON(Request $request, ReaderServices $read)
    {
        if ($request->file('file')->isValid()) {
            // Obtener el nombre original del archivo
            $fileName = $request->file('file')->getClientOriginalName();

            // Guardar el archivo en la carpeta app/public/file
            $filePath = $request->file('file')->storeAs('public/file', $fileName);
            

            // Obtener la ruta completa del archivo guardado
            $storedFilePath = storage_path('app/' . $filePath);

            // Procesar el archivo Excel utilizando el servicio ReaderServices
            $data = $read->readExcel($storedFilePath);

            return response()->json($data, 200);
        } else {
            return response()->json(['error' => 'Error al subir el archivo'], 500);
        }
    }
}
