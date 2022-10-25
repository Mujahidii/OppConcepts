<?php

namespace App\Repositories;


use Illuminate\Support\Facades\DB;

class SalesRepository
{
    public function dataBetween($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
}
