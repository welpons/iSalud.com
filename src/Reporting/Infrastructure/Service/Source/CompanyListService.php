<?php


namespace App\Reporting\Infrastructure\Service\Source;


class CompanyListService
{
    private $companies;

    public function __construct(array $companies)
    {
        $this->companies = $companies;
    }

    public function getCompanies() : array
    {
        return $this->getCompanies();
    }
}