<?php

namespace App\Console\Commands;

use App\Http\Controllers\AndroidWorker;
use App\Http\Controllers\Captain;
use App\Http\Controllers\HumanWorker;
use Illuminate\Console\Command;

class interface_segregation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:interface_segregation';

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
        (new Captain())->manage(new HumanWorker());
        (new Captain())->manage(new AndroidWorker());
    }
}
