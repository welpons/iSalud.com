<?php


namespace App\Reporting\Infrastructure\Service\Source;


interface SourceInterface
{
    public function getList() : array;
    public function isImportFailed() : bool;

}