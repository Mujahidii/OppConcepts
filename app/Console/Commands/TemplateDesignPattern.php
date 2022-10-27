<?php

namespace App\Console\Commands;

use App\Http\Controllers\TurkeySub;
use App\Http\Controllers\VeggieSub;
use Illuminate\Console\Command;

class TemplateDesignPattern extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:TemplateDesignPattern';

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

    public function handle()
    {
        (new TurkeySub())->getAllData();
        (new VeggieSub())->getAllData();
    }
}
