<?php

include_once 'lib/TwelveCode/MShell/CommandFactory.php';
include_once 'lib/TwelveCode/MShell/CommandRunner.php';

use \TwelveCode\MShell\CommandFactory;
use \TwelveCode\MShell\CommandRunner;

$cmd = CommandFactory::getCommand($argc, $argv);
CommandRunner::run($cmd);
echo PHP_EOL;