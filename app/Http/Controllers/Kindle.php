<?php

namespace App\Http\Controllers;

use App\Contracts\BookInterface;
use App\Contracts\KindleInterface;
use Illuminate\Http\Request;

class Kindle implements KindleInterface
{
    public function turnOn()
    {
        var_dump('turn on from kindle side');
    }

    public function turnNext()
    {
        var_dump('turn next from kindle side');
    }
}
