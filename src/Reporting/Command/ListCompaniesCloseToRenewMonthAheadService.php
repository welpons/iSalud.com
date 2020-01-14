<?php


namespace App\Reporting\Command;

use App\Reporting\Infrastructure\Service\Source\SourceFacoryInterface;

class ListCompaniesCloseToRenewMonthAheadService implements AppServiceInterface
{

    public function __construct(SourceFacoryInterface $sourceFacory)
    {

    }

    public function execute($dto)
    {

    }
}