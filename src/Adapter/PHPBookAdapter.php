<?php

namespace SON\Adapter;

class PHPBookAdapter implements Booksinterface
{
    private $book;

    public function __construct(string $title, string $author)
    {
        $this->book = new PHPBook($title, $author);
    }

    public function getAuthorAndTitle()
    {
        return  $this->book->getTitle(). ' by ' . $this->book->getAuthor();
    }
}
