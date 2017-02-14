<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Flywheight\FlywheightFactory;

$factory = new FlywheightFactory;

$soldier1 = $factory->getSoldier(0);
$soldier2 = $factory->getSoldier(1);
$soldier3 = $factory->getSoldier(2);
$soldier4 = $factory->getSoldier(3);
$soldier5 = $factory->getSoldier(4);

$soldier6 = $factory->getSoldier(2);
$soldier7 = $factory->getSoldier(3);
$soldier8 = $factory->getSoldier(4);


var_dump($soldier1, $soldier2, $soldier3, $soldier4, $soldier5);
var_dump($soldier6, $soldier7, $soldier8);
