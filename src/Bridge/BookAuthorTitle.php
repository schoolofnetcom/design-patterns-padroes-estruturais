<?php

namespace SON\Bridge;

class BookAuthorTitle extends BridgeBook
{
    public function get():string
    {
        return $this->implementor->showAuthor() . ' ' . $this->implementor->showTitle();
    }
}
