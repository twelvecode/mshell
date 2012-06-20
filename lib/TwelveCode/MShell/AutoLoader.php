<?php

namespace TwelveCode\MShell;

class AutoLoader
{
    public static function autoLoad($class)
    {
        $file = dirname(__FILE__) . '/../../' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

        if (file_exists($file))
        {
            include_once $file;
        }
    }
}