<?php


namespace App\Reporting\Infrastructure\Service\Converter;

use DomainException;

class ConverterFactory
{
    private $filePath;

    public function __construct(string $filePath)
    {
        // @TODO verify exists
        $this->filePath = $filePath;
    }

    public function getConverter(string $format) : DataConverter
    {
        $format = strtolower($format);

        switch ($format) {
            case 'csv':
                return new CSVConverter($this->filePath);
        }

        throw new DomainException(sprintf('Undefined data format: %s', $format));
    }
}