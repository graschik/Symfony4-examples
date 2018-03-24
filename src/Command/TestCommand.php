<?php
/**
 * Created by PhpStorm.
 * User: allse
 * Date: 23.03.2018
 * Time: 18:04
 */

namespace App\Command;

use App\Service;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    private $calc;

    public function __construct(Service\Calculator $calc)
    {
        $this->calc=$calc;

        parent::__construct();
    }

    public function configure()
    {
        $this->setName('app:test')
            ->setDescription('statik loh')
            ->setHelp('help')
            ->addArgument('a')
            ->addArgument('b');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $a=$input->getArgument('a');
        $b=$input->getArgument('b');
        $output->writeln($this->calc->sum((int)$a,(int)$b));
        return 0;
    }
}