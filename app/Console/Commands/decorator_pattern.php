<?php

namespace App\Console\Commands;

use App\Http\Controllers\BasicInspection;
use App\Http\Controllers\OilChange;
use App\Http\Controllers\TireChange;
use Illuminate\Console\Command;

class decorator_pattern extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:decorator_pattern';

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
        $cost = (new TireChange(new OilChange(new BasicInspection())))->getCost();

        $basicInspectionDes = new BasicInspection();
        $basic = $basicInspectionDes->basicDescription();

        $oilChangeDes = (new OilChange($basicInspectionDes));
        $oil = $oilChangeDes->basicDescription();

        $tireChangeDes = (new TireChange($oilChangeDes));
        $tire = $tireChangeDes->basicDescription();
    }
}
