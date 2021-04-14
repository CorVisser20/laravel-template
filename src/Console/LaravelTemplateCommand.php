<?php

namespace Cor\LaravelTemplate\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Output\ConsoleOutput;

class LaravelTemplateCommand extends Command
{
    protected $signature = 'laravel-template:install';
    protected $description = 'This command wil publish all vendor folders and files for you';

    public function handle()
    {
        // Define New Instance Of ConsoleOutput //
        $output = new ConsoleOutput();
        $this->callSilent('vendor:publish', ['--tag' => 'laravel-template', '--force' => true]);
        $output->writeln("\n\e[0;34;5m[Cor Visser - Laravel Template] \033[0mAll folders and files has been published.\e[0m\n");

    }
}
