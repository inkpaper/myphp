<?php

require_once "./Loader.php";
spl_autoload_register('Loader::__autoload');

use Design\LogToCsvAdapter;

$log = new LogToCsvAdapter('404:Not Found');

$log->writeError();