<?php


namespace App\Reporting\Infrastructure\Service\Converter;


class CSVConverter implements DataConverterInterface
{
    /** @var string */
    private $filePath;

    public function __construct(string $filePath)
    {
        // @TODO get dir and check if exists

        $this->filePath = $filePath;
    }

    public function generateFile(array $list) : void
    {
        $fp = fopen($this->filePath, 'w');

        foreach ($list as $fields) {

            fputcsv($fp, $fields);
        }

        fclose($fp);
    }
}