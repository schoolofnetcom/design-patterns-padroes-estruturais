<?php

namespace SON\Facade;

use SON\Decorator\EntityInterface;
use SON\Decorator\User;

class EntityFacade
{
    private static $entity;

    public function setEntity(EntityInterface $entity)
    {
        $this->entity = $entity;
    }

    public static function resolve($name)
    {
        if (self::$entity == null) {
            self::$entity = new User;
        }

        self::$entity->setName($name);

        $reflector = new \ReflectionClass(get_class(self::$entity));
        $comments = $reflector->getDocComment();

        preg_match('/\@decorator\ ([0-9a-zA-Z]+)/', $comments, $matches);

        if ($matches[1]) {
            $class = '\SON\Decorator\\'. $matches[1] .'Decorator';
        }

        $orm = new $class;
        $orm->setEntity(self::$entity);
        return $orm->operation();
    }
}
