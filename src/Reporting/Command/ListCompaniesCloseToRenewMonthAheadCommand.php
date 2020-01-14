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
    public function __construct(CompanyListService $companyListService, string $name = null)
    {
        parent::__construct($name);
    }

    protected function configure()
    {
        $this->setName('reporting:list-companies')
            ->setDescription('This command provides a list of companies close to renew mont ahead')
            ->setHelp('Provider name must unique')
            ->addOption('format', null, InputOption::VALUE_OPTIONAL, 'Pass the format of the list. By default is: CSV', 1);
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $source = new InternSource();









        $output->writeln(' -------------- Import finished ------- ');
    }
}