<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructorController extends VideoController
{
    public function newFunction()
    {
        var_dump('constructor parent class');
    }
}
