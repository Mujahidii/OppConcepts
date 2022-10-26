<?php

namespace App\Console\Commands;

use App\Http\Controllers\BraintreeGateway;
use App\Http\Controllers\StripeGateway;
use App\Http\Controllers\Subscription;
use Illuminate\Console\Command;

class objectCompositionAbstraction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:objectCompositionAbstraction';

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
        $subscriptionObj = new Subscription(new StripeGateway());
        $subscriptionObj2 = new Subscription(new BraintreeGateway());
    }
}
