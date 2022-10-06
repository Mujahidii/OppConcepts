<?php

namespace App\Console\Commands;

use App\Http\Controllers\AchievementTypeController;
use App\Http\Controllers\FirstBestAnswerController;
use App\Http\Controllers\FirstThousandPointController;
use Illuminate\Console\Command;

class AbstractCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:abstract';

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
//        $achievementObj = (new AchievementTypeController())->icon();

        /// First Thousand Class
        $firstThousandObj = new FirstThousandPointController();
        $iconThousand = $firstThousandObj->icon();
        $nameThousand = $firstThousandObj->name();

        // First Best Answer Class
        $firstAnswerObj = new FirstBestAnswerController();
        $answerIcon = $firstAnswerObj->icon();
        $answerName = $firstAnswerObj->name();

        // After implement the abstract
        $qualifier = $firstAnswerObj->qualifier('user');
        dd($qualifier);
    }
}
