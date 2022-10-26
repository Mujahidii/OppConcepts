<?php

use App\Http\Controllers\HtmlOutput;
use App\Http\Controllers\SalesReporter;
use App\Repositories\SalesRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $obj = new SalesReporter(new SalesRepository());
    $startDate = Carbon::now()->subDays(10);
    $endDate = Carbon::now();
    return $obj->between($startDate, $endDate, new HtmlOutput());
});
