<?php

namespace TwelveCode\MShell\Command;

use TwelveCode\MShell\ACommand;

class Discover extends ACommand
{
    protected function process()
    {
        echo "Preforming proper discovery";
    }

    public function getHelp()
    {
        echo 'Preforms Magento setup analysis.';
    }
}