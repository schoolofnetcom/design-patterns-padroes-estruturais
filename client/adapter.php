<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Adapter\PHPBookAdapter;
use SON\Adapter\RenderBook;


$book = new PHPBookAdapter('Livro de PHP 7.0', 'Erik Figueiredo');

$render = new RenderBook($book);
echo $render->renderTitleAndName();
