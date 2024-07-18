<?php
namespace App\Services;

use Maatwebsite\Excel\Facades\Excel;

class ReaderServices
{
    public function readExcel($path)
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
                $structuredData[$contador] = $this->structureData($sheetData, $contador);
            }
        }

        // Mostrar los datos estructurados
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
}