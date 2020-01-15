<?php


namespace App\Reporting\Infrastructure\Service\Source;

use InvalidArgumentException;

class SourceFactory implements SourceFactoryInterface
{


    public function instantiate(string $companyName) : SourceInterface
    {
        $sourceClassName = "App\Reporting\Infrastructure\Service\Source\{$companyName}Source";

        if (!class_exists($sourceClassName)) {
            throw new InvalidArgumentException(sprintf('Source class %s not found for company %s', $sourceClassName, $companyName));
        }

        return new $sourceClassName();
    }
}