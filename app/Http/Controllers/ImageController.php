<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function showImages()
    {
        // Obtener la lista de archivos en la carpeta public/images
        $publicPath = public_path('images');

        // Obtener la lista de archivos en la carpeta
        $files = File::files($publicPath);

        // Procesar los nombres de los archivos
        $images = [];
        foreach ($files as $file) {
            $filename = $file->getFilename();
            if(strpos($filename, '-default') == false){
                $images[] = $file->getFilename();
            }
        }

        // Obtener la lista de archivos en la carpeta public/icon
        $publicPath = public_path('icon');

        // Obtener la lista de archivos en la carpeta
        $files = File::files($publicPath);

        // Procesar los nombres de los archivos
        $icons = [];
        foreach ($files as $file) {
            $filename = $file->getFilename();
            if (strpos($filename, '-default') === false) {
                $icons[] = $filename;
            }
        }

        return view('gallery.images', compact('images', 'icons'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $images = $request->file('image');
            
            foreach ($images as $image) {
                // Generar un nombre único para cada imagen
                $imageName = $image->getClientOriginalName();

                // Guardar la imagen en la carpeta public/images
                $image->move(public_path('images'), $imageName);
            }

            return 'Imágenes subidas correctamente.';
        }

        if ($request->hasFile('icon')) {
            $icons = $request->file('icon');

            foreach ($icons as $icon) {
                // Generar un nombre único para cada imagen
                $iconName = $icon->getClientOriginalName();

                // Guardar la imagen en la carpeta public/images
                $icon->move(public_path('icon'), $iconName);
            }

            return 'Iconos subidas correctamente.';
        }

        return 'No se ha seleccionado ninguna imagen.';
    }
}
