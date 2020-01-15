<?php


namespace App\Reporting\Infrastructure\Service\Converter;


class CSVConverter extends Converter
{

    public function generateFile(array $list) : void
    {
        $fp = fopen($this->filePath, 'w');

        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);
    }
}