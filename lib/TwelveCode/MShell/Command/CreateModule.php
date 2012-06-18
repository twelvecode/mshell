<?php

namespace TwelveCode\MShell\Command;

include_once (dirname(__FILE__) . '/../ACommand.php');

use TwelveCode\MShell\ACommand;

class CreateModule extends ACommand
{
    public function process()
    {
        echo 'Creating new module';
    }

    public function getHelp()
    {
        return 'Creates new Magento Module';
    }
}