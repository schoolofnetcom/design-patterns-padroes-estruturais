<?php

namespace SON\Bridge;

class UpperImplementor implements Implementor
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
        return strtoupper($this->author);
    }

    public function showTitle() :string
    {
        return strtoupper($this->title);
    }
}
