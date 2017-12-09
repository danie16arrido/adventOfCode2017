<?php
namespace DayTwo;

class FileReader{
    
    public function get2DArrayFromCsv($file, $delimiter)
    {
        if ( ($handle = fopen($file, "r+")) !== FALSE) {
            $i = 0;
            $data2DArray = array();
            while ( ($lineArray = fgetcsv($handle, 0, $delimiter)) !== FALSE) {
                for ($j = 0; $j < count($lineArray); $j++) {
                    $data2DArray[$i][$j] = $lineArray[$j];
                }
                $i++;
            }
            fclose($handle);
        }
        return $data2DArray;
    }
}