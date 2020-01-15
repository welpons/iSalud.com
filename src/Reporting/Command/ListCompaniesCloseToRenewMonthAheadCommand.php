<?php

namespace App\Reporting\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use App\Reporting\Infrastructure\Service\Source\InternSource;
use App\Reporting\Infrastructure\Service\Source\CompanyListService;

class ListCompaniesCloseToRenewMonthAheadCommand extends Command
{
    private $istCompaniesCloseToRenewMonthAheadService;

//    public function __construct(ListCompaniesCloseToRenewMonthAheadService $listCompaniesCloseToRenewMonthAheadService)
//    {
//        parent::__construct();
//        $this->istCompaniesCloseToRenewMonthAheadService = $listCompaniesCloseToRenewMonthAheadService;
//    }

    protected function configure()
    {
        $this->setName('reporting:list-companies')
            ->setDescription('This command provides a list of companies close to renew mont ahead')
            ->setHelp('Provider name must unique')
            ->addOption('format', null, InputOption::VALUE_OPTIONAL, 'Pass the format of the list. By default is: CSV', 1);
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //$clients = $this->istCompaniesCloseToRenewMonthAheadService->execute();



        $output->writeln(' -------------- Import finished ------- ');
    }
}