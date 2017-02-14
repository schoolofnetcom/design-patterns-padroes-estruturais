<?php

namespace SON\Adapter;

class RenderBook
{
    private $book;

    public function __construct(Booksinterface $book)
    {
        $this->book = $book;
    }

    public function renderTitleAndName()
    {
        return $this->book->getAuthorAndTitle();
    }
}
