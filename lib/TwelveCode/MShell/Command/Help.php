<?php

namespace TwelveCode\MShell\Command;

include_once (dirname(__FILE__) . '/../ACommand.php');

use \TwelveCode\MShell\ACommand;
use \TwelveCode\MShell\CommandFactory;

class Help extends ACommand
{
    public function process()
    {
        echo 'Displaying help for:' . PHP_EOL;

        $argv = $this->getArgv();
        array_shift($argv);

        // Get the next command
        $cmd = CommandFactory::getCommand($this->getArgc() - 1, $argv);

        echo $cmd->getHelp();
    }

}