<?php

namespace TwelveCode\MShell;

class CommandRunner
{
    public static function run(ACommand $cmd)
    {
        $result = $cmd->execute()->getResult();

        echo $result;
    }
}