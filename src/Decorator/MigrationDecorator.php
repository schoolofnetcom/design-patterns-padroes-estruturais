<?php

namespace SON\Decorator;

class MigrationDecorator implements DecoratorInterface
{
    protected $entity;

    public function setEntity(EntityInterface $entity)
    {
        $this->entity = $entity;
    }

    public function operation() :string
    {
        $name = get_class($this->entity);
        $name = explode('\\', $name);
        $name = array_pop($name);
        return strtolower($name) . 's migrated';
    }
}
