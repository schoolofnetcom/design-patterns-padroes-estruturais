<?php

namespace SON\Decorator;

/**
 * @decorator Orm
 */
class User implements EntityInterface
{
    private $name;

    public function setName($name)
    {
        return $this->name = $name;
    }
    public function getName() :string
    {
        return $this->name;
    }
}
