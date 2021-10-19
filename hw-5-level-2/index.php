<?php

use Logger\DBWriter;
use Logger\FileWriter;
use Logger\Formatter;
use Logger\Test;
use Logger\Logger;
use Logger\JsonFormatter;

require_once 'vendor/autoload.php';
$writer = new FileWriter();
$formatter = new Formatter();

$test = new Test(new Logger($writer, $formatter));

$test->emergencyTest();
$test->alertTest();
$test->infoTest();
$test->debugTest();