<?php

namespace SON\Bridge;

abstract class BridgeBook
{
    public function __construct(string $author, string $title, string $implementor)
    {
        $this->implementor = new $implementor($author, $title);
        if (is_a($this->implementor, 'SON\Bridge\Implementor'));
    }

    public abstract function get():string;
}
