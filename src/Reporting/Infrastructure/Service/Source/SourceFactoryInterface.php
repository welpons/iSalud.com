<?php


namespace App\Reporting\Infrastructure\Service\Source;


interface SourceFactoryInterface
{
    public function instantiate(string $companyName) : SourceInterface;
}