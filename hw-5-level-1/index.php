<?php

use Logger\Test;
use Logger\Logger;

require_once 'vendor/autoload.php';

$test = new Test(new Logger());
$test->example();