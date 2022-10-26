<?php

namespace App\Http\Controllers;

use App\Contracts\CarService;
use Illuminate\Http\Request;

class TireChange implements CarService
{
    /**
     * @var CarService
     */
    public $carService;

    /**
     * @param CarService $carService
     */
    public function __construct(CarService $carService)
    {

        $this->carService = $carService;
    }

    /**
     * @return int
     */
    public function getCost(): int
    {
        return 15 + $this->carService->getCost();
    }

    /**
     * @return string
     */
    public function basicDescription(): string
    {
        return $this->carService->basicDescription() . ' ' . 'rotate the tire';
    }
}
