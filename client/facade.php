<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Facade\EntityFacade;

$facade = new EntityFacade;
$result = $facade->resolve('Erik Figueiredo');
//$result = EntityFacade::resolve('Erik Figueiredo');

var_dump($result);
