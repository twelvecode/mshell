<?php

namespace TwelveCode\MShell\Command;

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