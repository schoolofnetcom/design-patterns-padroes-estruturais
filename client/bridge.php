<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Bridge\BookAuthorTitle;
use SON\Bridge\BookTitleAuthor;
use SON\Bridge\LowerImplementor;
use SON\Bridge\UpperImplementor;

$example1 = new BookAuthorTitle('Erik Figueiredo', 'Livro PHP 7.0', LowerImplementor::class);
var_dump($example1->get());

$example1 = new BookAuthorTitle('Erik Figueiredo', 'Livro PHP 7.0', UpperImplementor::class);
var_dump($example1->get());

$example1 = new BookTitleAuthor('Erik Figueiredo', 'Livro PHP 7.0', LowerImplementor::class);
var_dump($example1->get());

$example1 = new BookTitleAuthor('Erik Figueiredo', 'Livro PHP 7.0', UpperImplementor::class);
var_dump($example1->get());
