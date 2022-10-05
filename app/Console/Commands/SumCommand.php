<?php

namespace App\Console\Commands;

use App\Http\Controllers\CollectionChildController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\VideosController;
use Illuminate\Console\Command;

class SumCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sum:key';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dataArray = [
            new VideosController('Some video 1', 100),
            new VideosController('Some video 2', 200),
            new VideosController('Some video 3', 300)
        ];

        // Sum array value in parent
        $collection = new CollectionController($dataArray);
        $lengthSum = $collection->sum('length');
        echo $lengthSum;

        // Sum array value from child class
        $childCollection = (new CollectionChildController($dataArray))->length();
        echo $childCollection;
    }
}
