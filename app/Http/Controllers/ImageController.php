<?php

namespace App\Http\Controllers;

use App\Models\html;
use App\Models\Icon;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function showImages(Request $request)
    {
        $htmls = html::all();
        $content = false;
        
        $html = '';
        if($request->has('pdf'))
        {
            $content = true;
            $html = html::with([
                    'images' => function ($query) {
                        $query->whereNot('url', 'like', '%-default%');
                    },
                    'icons' => function ($query) {
                        $query->whereNot('url', 'like', '%-default%');
                    }
                ])
                ->where('slug', $request->pdf)
                ->first();
        }
        
        return view('gallery.images', compact('html', 'htmls', 'content'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $html = html::find($request->pdf);
            
            foreach ($images as $image) {
                // Generar un nombre único para cada imagen
                $imageName = $image->getClientOriginalName();

                // Guardar la imagen en la carpeta public/images
                $image->move(public_path('images'), $imageName);

                $html->images()->create([
                    'url' => $imageName
                ]);
            }

            return 'true';
        }

        if ($request->hasFile('icon')) {
            $icons = $request->file('icon');

            $html = html::find($request->pdf);

            foreach ($icons as $icon) {
                // Generar un nombre único para cada imagen
                $iconName = $icon->getClientOriginalName();

                // Guardar la imagen en la carpeta public/images
                $icon->move(public_path('icon'), $iconName);

                $html->icons()->create([
                    'url' => $iconName
                ]);
            }

            return 'true';
        }

        return 'No se ha seleccionado ninguna imagen.';
    }

    public function deleteImages(Request $request)
    {
        $image = Images::findOrFail($request->id);
        
        // Eliminar el archivo físico de la imagen
        Storage::delete('public/images/' . $image->url);
        
        // Eliminar el registro de la imagen de la base de datos
        $image->delete();
        
        return redirect()->back();
    }

    public function deleteIcons(Request $request)
    {
        $image = Icon::findOrFail($request->id);
        
        // Eliminar el archivo físico de la imagen
        Storage::delete('public/icon/' . $image->url);
        
        // Eliminar el registro de la imagen de la base de datos
        $image->delete();
        
        return redirect()->back();
    }
}
