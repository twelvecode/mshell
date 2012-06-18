<?php

namespace TwelveCode\MShell;

use TwelveCode\MShell\Command;

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
                throw new \Exception('Command not found - ' . $argv[1]);
            }
        }
    }
} // CommandFactory