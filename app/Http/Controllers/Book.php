<?php

namespace App\Http\Controllers;

use App\Contracts\BookInterface;
use Illuminate\Http\Request;

class Book implements BookInterface
{
    public function open()
    {
        var_dump('open from the book side');
    }

    public function openNextPage()
    {
        var_dump('turn the next page from book side');
    }
}
