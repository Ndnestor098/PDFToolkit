<?php
namespace App\Services;

use Maatwebsite\Excel\Facades\Excel;

class ReaderServices
{
    public function readExcel($path)
    {
        // Ruta del archivo Excel (puede ser una ruta subida o una ruta fija en el servidor)
        // $filePath = storage_path('app/' . str_replace('public/', '', $path));

        // Leer el archivo Excel
        $data = Excel::toArray([], $path);
        $sheetData = $data[0];

        // Estructurar los datos
        $structuredData = $this->structureData($sheetData);

        // Mostrar los datos estructurados
        return $structuredData;
    }

    private function structureData($excelData)
    {
        $structuredData = [];
        $currentPage = '';
        $pageCounter = 0;

        foreach ($excelData as $row) {
            $identifier = trim($row[0]);

            // Check if the row indicates a new page
            if (strpos($identifier, 'page-') !== false) {
                $currentPage = $identifier;
                $structuredData[$pageCounter][$currentPage] = [];
            } elseif ($identifier === 'pdf' && $row[1] === null && $row[2] === null) {
                // Found ["pdf", null, null], increment page counter
                $pageCounter++;
            } else {
                $value = isset($row[1]) ? $row[1] : null;
                $color = isset($row[2]) ? $row[2] : null;

                // Store the value and color under the current page
                if ($currentPage) {
                    $structuredData[$pageCounter][$currentPage][$identifier] = [
                        'value' => $value,
                        'color' => $color
                    ];
                }
            }
        }

        return $structuredData;
    }
}