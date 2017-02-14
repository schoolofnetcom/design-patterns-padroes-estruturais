<?php

require __DIR__.'/../vendor/autoload.php';

use SON\Composite\PHPCategory;
use SON\Composite\SolidCategory;
use SON\Composite\FrameworksCategory;
use SON\Composite\LaravelCategory;


$php = new PHPCategory;
$solid = new SolidCategory;
$framework = new FrameworksCategory;
$laravel = new LaravelCategory;


$solid->addCategory($laravel);
$php->addCategory($framework);
$php->addCategory($solid);

function categoriesList($category, $start = '__') {
    $i = 0;
    while ($category->getCategory($i) !== null) {
        $cat = $category->getCategory($i);
        if ($cat->getCategory(0) !== null) {
            categoriesList($cat, $start.'__');
        }
        echo $start . $cat->getName().PHP_EOL;
        $i++;
    }
}

categoriesList($php);
