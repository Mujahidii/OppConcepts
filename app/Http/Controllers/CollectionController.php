<?php

namespace App\Http\Controllers;

class CollectionController extends Controller
{
    protected array $item;

    public function __construct(array $item)
    {
        $this->item = $item;
    }

    public function sum($key)
    {
        return array_sum(array_map(fn($item) => $item->$key, $this->item));
    }
}
