<?php

namespace App\Console\Commands;

use Ultra\Console\Command as BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class Command extends BaseCommand
{
    protected function configure(): void
    {
        parent::configure();

        $this->setName('Extreme');
        $this->setDescription('A sample command');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(sprintf('<info>Hello, World!</info>'));

        // The error code, 0 on success
        return 0;
    }
}