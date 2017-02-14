<?php

namespace SON\Bridge;

class LowerImplementor implements Implementor
{
    private $author;
    private $title;

    public function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function showAuthor() :string
    {
        return strtolower($this->author);
    }

    public function showTitle() :string
    {
        return strtolower($this->title);
    }
}
