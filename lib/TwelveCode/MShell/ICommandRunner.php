<?php

namespace TwelveCode\MShell;

use \TwelveCode\MShell\ACommand;

interface ICommandRunner
{
    /**
     * Runs the command $cmd
     *
     * @static
     * @abstract
     *
     * @param ACommand $cmd
     *
     * @return mixed
     */

    public static function run(ACommand $cmd);
}