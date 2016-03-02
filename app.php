<?php

require_once "vendor/autoload.php";

use Symfony\Component\Console\Application;
use MigrateHelper\Command\ListFields;

$app = new Application();
$app->add(new ListFields());
$app->run();
