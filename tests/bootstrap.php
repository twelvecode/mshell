<?php

include_once dirname(__FILE__) . '/../lib/TwelveCode/MShell/AutoLoader.php';

use TwelveCode\MShell\AutoLoader;

spl_autoload_register(array('TwelveCode\MShell\AutoLoader', 'autoLoad'));