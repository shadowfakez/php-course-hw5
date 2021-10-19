<?php

use Logger\DBWriter;
use Logger\FileWriter;
use Logger\StringFormatter;
use Logger\Test;
use Logger\Logger;
use Logger\JsonFormatter;

require_once 'vendor/autoload.php';
$writer = new FileWriter();
$formatter = new StringFormatter();

$test = new Test(new Logger($writer, $formatter));

$test->emergencyTest();
$test->alertTest();
$test->infoTest();
$test->debugTest();
