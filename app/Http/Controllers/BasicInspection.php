<?php

namespace App\Http\Controllers;

use App\Contracts\CarService;
use Illuminate\Http\Request;

class BasicInspection implements CarService
{
    /**
     * @return int
     */
    public function getCost(): int
    {
        return 25;
    }

    /**
     * @return string
     */
    public function basicDescription(): string
    {
        return 'Basic Inspection';
    }
}
