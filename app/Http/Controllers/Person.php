<?php

namespace App\Http\Controllers;

use App\Contracts\BookInterface;
use Illuminate\Http\Request;

class Person
{
    /**
     * @var BookInterface
     */
    public $book;

    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }

    public function read()
    {
        $this->book->open();
        $this->book->openNextPage();
    }
}
