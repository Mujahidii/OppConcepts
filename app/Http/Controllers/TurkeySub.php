<?php

namespace App\Http\Controllers;

use App\Contracts\Sub;
use Illuminate\Http\Request;

class TurkeySub extends Sub
{
    public function getAllData()
    {
        return $this->make();
    }

    /**
     * @return $this
     */
    public function addPrimaryToppings()
    {
        var_dump('add some Turkey');
        return $this;
    }
}
