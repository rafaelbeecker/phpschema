<?php

require_once '../vendor/autoload.php';

use Solis\PhpSchema\Sample\Classes\Cidade;
use Solis\Breaker\TException;

error_reporting(E_ALL);

try {

    $instance = new Cidade();

    echo $instance->schema->toJson();

} catch (TException $exception) {
    echo $exception->toJson();
}
