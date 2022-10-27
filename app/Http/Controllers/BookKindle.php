<?php

namespace App\Http\Controllers;

use App\Contracts\BookInterface;
use App\Contracts\KindleInterface;
use Illuminate\Http\Request;

class BookKindle implements BookInterface
{
    /**
     * @var Kindle
     */
    public $kindle;

    public function __construct(Kindle $kindle)
    {
        $this->kindle = $kindle;
    }

    public function open()
    {
        $this->kindle->turnOn();
    }

    public function openNextPage()
    {
        $this->kindle->turnNext();
    }
}
