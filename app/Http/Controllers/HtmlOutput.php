<?php

namespace App\Http\Controllers;

use App\Repositories\SalesOutputInterface;
use App\Repositories\SalesRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HtmlOutput implements SalesOutputInterface
{

    /**
     * @param $output
     * @return string
     */
    public function output($output): string
    {
        return "<h1>Sales: $output</h1>";
    }
}
