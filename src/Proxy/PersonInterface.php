<?php

namespace SON\Proxy;

interface PersonInterface
{
    public function __construct($name, $age);
    public function getName() :string;
    public function getAge() :string;
}
