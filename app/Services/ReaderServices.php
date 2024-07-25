<?php
namespace App\Services;

use App\Models\ImagePDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\html;
use Illuminate\Support\Facades\Log;

class ReaderServices
{
    public function readExcel($path, $request = false)
    {
        // Leer el archivo Excel
        $data = Excel::toArray([], $path);
        $sheetData = $data[0];

        // Estructurar los datos
        $contador = 1;
        foreach ($sheetData[0] as $value) {
            if(strpos($value, 'PDF') !== false)
            {
                $contador ++;
                $structuredData['PDF-'.$contador-1] = $this->structureData($sheetData, $contador);
            }
        }

        // Mostrar los datos estructurados
        if($request){
            $this->saveData($structuredData, $request);
        }

        return $structuredData;
    }

    private function structureData($excelData, $num)
    {
        $structuredData = [];
        $currentPage = '';
        $pageCounter = 0;

        foreach ($excelData as $row) {
            $identifier = trim($row[0]);    

            // Check if the row indicates a new page
            if (strpos($identifier, 'page-') !== false) {
                $currentPage = $identifier;
                // Initialize the new page in the structured data
                $structuredData[$pageCounter][$currentPage] = [];

                if($row[1]){
                    $rowSum = 3 * $num;
                    $value = isset($row[$rowSum]) ? $row[$rowSum] : null;

                    if($row[$rowSum + 1] == "⛔"){
                        $row[$rowSum + 1] = null;
                    }

                    $color = isset($row[$rowSum + 1]) ? $row[$rowSum + 1] : null;

                    // Store the value and color under the current page
                    if ($currentPage) {
                        $structuredData[$pageCounter][$currentPage][$row[1]] = [
                            'value' => $value,
                            'color' => $color
                        ];
                    }
                }
            } elseif (($identifier === 'PDF' || $identifier === 'pdf') && $row[1] === null && $row[2] === null) {
                // Found ["pdf", null, null], increment page counter
                $pageCounter++;
                $currentPage = ''; // Reset current page
            } else {
                $rowSum = 3 * $num;
                $value = isset($row[$rowSum]) ? $row[$rowSum] : null;

                if($row[$rowSum + 1] == "⛔"){
                    $row[$rowSum + 1] = null;
                }

                $color = isset($row[$rowSum + 1]) ? $row[$rowSum + 1] : null;

                // Store the value and color under the current page
                if ($currentPage) {
                    $structuredData[$pageCounter][$currentPage][$row[1]] = [
                        'value' => $value,
                        'color' => $color
                    ];
                }
            }
        }

        return $structuredData[0];
    }

    public function saveData($data, $request)
    {
        $array = [];
        foreach ($data as $key => $value) {
            $count = 0;
            foreach ($value as $valores => $dato) {
                foreach ($dato as $subKey => $value) {
                    if ($subKey == 'image-global' && $value['value']) {
                        $count++;
                        $array[$key]['image-' . $count] = $value['value'];
                    }
                    
                    if(strpos($subKey, '-icon') !== false && isset($value['value']) && $value['value']){
                        $count++;
                        $array[$key]['icon-' . $count] = $value['value'];
                    }
                }
            }
        }

        if (empty($array)) {
            // Busca el id del html correspondiente
            $html = Html::find($request);
            if ($html) {
                $html_id = $html->id;
    
                // Actualiza todas las entradas correspondientes a este html_id para que la columna url esté vacía
                ImagePDF::where('html_id', $html_id)->update(['url' => ""]);
            } else {
                Log::warning("Html no encontrado: " . $request);
            }
        } else {
            foreach (array_keys($array) as $key) {
                // Busca el id del html correspondiente
                $html = Html::find($request);
                if ($html) {
                    $html_id = $html->id;
    
                    // Usa updateOrCreate para actualizar si existe o crear si no existe
                    ImagePDF::updateOrCreate(
                        [
                            'name' => $key,
                            'html_id' => $html_id
                        ],
                        [
                            'url' => json_encode($array[$key]) // Convierte el array a JSON
                        ]
                    );
                } else {
                    Log::warning("Html no encontrado: " . $request);
                }
            }
        }
    }
}