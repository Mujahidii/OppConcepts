<?php

namespace App\Http\Controllers;

class CollectionChildController extends CollectionController
{
    public function length()
    {
        return $this->sum('length');
    }
}
