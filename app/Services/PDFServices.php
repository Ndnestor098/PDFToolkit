<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class PDFServices
{
    public function pathImage($data)
    {
        // Crear la ruta usando public_path
        foreach ($data as $pageKey => $page) {
            // Verificar que $page sea un array asociativo
            if (is_array($page)) {
                // Iterar sobre los elementos dentro de cada página
                foreach ($page as $key => $value) {
                    if (stripos($key, "icon") !== false) {
                        // Verificar si $value es un array y contiene la clave 'value'
                        if (is_array($value) && isset($value['color']) && !empty($value['color'])) {
                            $image = $value["value"];
                            $color = isset($value["color"]) ? $value["color"] : null;
    
                            $sourcePath = public_path($image);
                            $destinationPathBlue = public_path($image);
    
                            // Cambiar el color de la imagen
                            $this->recolorImage($sourcePath, $destinationPathBlue, $color);
                        }
                    }
                }
            }
        }
    }

    public function convertToJSON()
    {
        // Ruta del archivo de texto en el almacenamiento
        $txtFilePath = 'public/file/Estilo-De-Datos.txt';

        // Verificar si el archivo existe
        if (!Storage::exists($txtFilePath)) {
            return response()->json(['error' => 'El archivo de texto no existe en la ubicación especificada.'], 404);
        }

        // Leer el contenido del archivo
        $fileContent = Storage::get($txtFilePath);

        // Intentar decodificar el JSON
        $data = json_decode($fileContent, true);

        // Verificar si la decodificación fue exitosa
        if (json_last_error() !== JSON_ERROR_NONE) {
            return response()->json(['error' => 'Error al decodificar el JSON.', 'details' => json_last_error_msg()], 400);
        }

        // Devolver el JSON generado
        return $data;
    }

    public function recolorImage($sourcePath, $destinationPath, $hexColor)
    {
        if (!file_exists($sourcePath)) {
            die("La imagen fuente no existe: " . $sourcePath);
        }

        // Convertir color hexadecimal a RGB
        list($red, $green, $blue) = sscanf($hexColor, "#%02x%02x%02x");

        $img = imagecreatefrompng($sourcePath);
        if (!$img) {
            die("Error al crear la imagen desde el archivo: " . $sourcePath);
        }

        imagealphablending($img, false);
        imagesavealpha($img, true);

        $width = imagesx($img);
        $height = imagesy($img);

        for ($x = 0; $x < $width; $x++) {
            for ($y = 0; $y < $height; $y++) {
                $rgba = imagecolorat($img, $x, $y);
                $alpha = ($rgba & 0x7F000000) >> 24;
                if ($alpha != 127) {
                    $newColor = imagecolorallocatealpha($img, $red, $green, $blue, $alpha);
                    imagesetpixel($img, $x, $y, $newColor);
                }
            }
        }

        imagepng($img, $destinationPath);
        imagedestroy($img);
    }
}