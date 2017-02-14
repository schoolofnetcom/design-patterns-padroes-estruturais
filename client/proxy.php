<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Proxy\Proxy;

$person = new Proxy('Erik Figueiredo', 31);

var_dump($person->getName()); //até antes disso, o objeto Person, não existia
var_dump($person->getName());
var_dump($person->getAge());
var_dump($person->getCounter());
