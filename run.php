<?php

include_once 'lib/TwelveCode/MShell/CommandFactory.php';
include_once 'lib/TwelveCode/MShell/CommandRunner.php';

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