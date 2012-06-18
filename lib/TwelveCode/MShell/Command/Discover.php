<?php

namespace TwelveCode\MShell\Command;

include_once (dirname(__FILE__) . '/../ACommand.php');

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