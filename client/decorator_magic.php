<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Decorator\User;

$user = new User;
$user->setName('Erik Figueiredo');

$reflector = new ReflectionClass(User::class);
$comments = $reflector->getDocComment();

preg_match('/\@decorator\ ([0-9a-zA-Z]+)/', $comments, $matches);

if ($matches[1]) {
    $class = 'SON\Decorator\\'. $matches[1] .'Decorator';
}

$orm = new $class;
$orm->setEntity($user);
$result = $orm->operation();
var_dump($result);
