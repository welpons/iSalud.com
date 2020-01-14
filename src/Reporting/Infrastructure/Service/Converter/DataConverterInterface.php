<?php


namespace App\Reporting\Infrastructure\Service\Converter;


interface DataConverterInterface
{
    public function generateFile(string $fileName) : void;
}