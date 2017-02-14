<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Decorator\User;
use SON\Decorator\OrmDecorator;
use SON\Decorator\MigrationDecorator;

$user = new User;
$user->setName('Erik Figueiredo');

$orm = new OrmDecorator;
$orm->setEntity($user);
$result = $orm->operation();
var_dump($result);

$migration = new MigrationDecorator;
$migration->setEntity($user);
$result = $migration->operation();
var_dump($result);
