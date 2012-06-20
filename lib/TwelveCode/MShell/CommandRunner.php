<?php

namespace TwelveCode\MShell;

class CommandRunner implements ICommandRunner
{
    public static function run(ACommand $cmd)
    {
        $result = $cmd->execute()->getResult();

        echo $result;
    }
}