<?php

namespace SON\Proxy;

class Person implements PersonInterface
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() :string
    {
        return $this->name;
    }

    public function getAge() :string
    {
        return $this->age;
    }
}
