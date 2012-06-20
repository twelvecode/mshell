<?php

include_once dirname(__FILE__) . '/lib/TwelveCode/MShell/AutoLoader.php';

use TwelveCode\MShell\AutoLoader;

spl_autoload_register(array('TwelveCode\MShell\AutoLoader', 'autoLoad'));

use \TwelveCode\MShell\CommandFactory;
use \TwelveCode\MShell\CommandRunner;

try
{
    $cmd = CommandFactory::getCommand($argc, $argv);
    CommandRunner::run($cmd);
}
catch (Exception $e)
{
    echo "Fatal error: " . $e->getMessage();
}
echo PHP_EOL;