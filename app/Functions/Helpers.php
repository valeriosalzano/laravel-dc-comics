<?php

namespace App\Functions;

class Helpers
{
    public static function getCsvContent(string $path)
    {
        $data = [];

        $file = fopen($path, 'r');

        if ($file === false) {
            exit('Error. Missing or corrupted file.');
        }

        while (($row = fgetcsv($file)) !== FALSE) {
            $data[] = $row;
        }

        return $data;
    }
}
