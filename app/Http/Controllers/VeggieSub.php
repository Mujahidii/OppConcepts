<?php

namespace App\Http\Controllers;

use App\Contracts\Sub;
use Illuminate\Http\Request;

class VeggieSub extends Sub
{
    public function getAllData()
    {
        return $this->make();
    }

    public function addPrimaryToppings()
    {
        var_dump('add some veggies');
        return $this;
    }
}
