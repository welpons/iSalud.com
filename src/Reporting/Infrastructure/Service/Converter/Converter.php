<?php


namespace App\Reporting\Infrastructure\Service\Converter;


abstract class Converter implements DataConverterInterface
{
    /** @var string */
    protected $filePath;

    public function __construct(?string $filePath = null)
    {
        // @TODO get dir and check if exists

        $this->filePath = $filePath;
    }
}