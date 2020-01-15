<?php


namespace App\Reporting\Command;

use App\Reporting\Infrastructure\Service\Source\SourceFacoryInterface;
use App\Reporting\Infrastructure\Service\Source\CompanyListService;

class ListCompaniesCloseToRenewMonthAheadService implements AppServiceInterface
{

    public function __construct(SourceFacoryInterface $sourceFacory, CompanyListService $companyListService)
    {

    }

    public function execute($dto)
    {

    }
}