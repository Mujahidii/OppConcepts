<?php

namespace App\Http\Controllers;

use App\Repositories\SalesOutputInterface;
use App\Repositories\SalesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesReporter
{

    /**
     * @var SalesRepository
     */
    public $repo;

    public function __construct(SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function between($startDate, $endDate, SalesOutputInterface $salesOutput)
    {
        $sales = $this->repo->dataBetween($startDate, $endDate);
        return $salesOutput->output($sales);
    }
}
