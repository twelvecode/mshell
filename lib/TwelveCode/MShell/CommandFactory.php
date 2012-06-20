<?php

namespace TwelveCode\MShell;

use TwelveCode\MShell\Command;
use TwelveCode\MShell\Exception;

class CommandFactory
{
    /**
     * @static
     *
     * @param $argc
     * @param $argv
     *
     * @return ACommand
     */

    public static function getCommand($argc, $argv)
    {
        if (isset($argv[1]))
        {
            $class = ucfirst($argv[1]);
            $ns = 'TwelveCode\\MShell\\Command\\';
            $nsClass = $ns . $class;

            $file = dirname(__FILE__) . '/Command/' . $class . '.php';

            if (file_exists($file))
            {
                include_once ($file);

                $h = new $nsClass();

                $h->setArgc($argc);
                $h->setArgv($argv);

                return $h;
            }
            else
            {
                throw new Exception\CommandNotFound('Command not found - ' . $argv[1]);
            }
        }
        else
        {
            throw new Exception\CommandNotSpecified('No command specified');
        }
    }

} // CommandFactory