<?php

namespace App\Console\Commands;

use App\Http\Controllers\Book;
use App\Http\Controllers\BookKindle;
use App\Http\Controllers\Kindle;
use App\Http\Controllers\Person;
use Illuminate\Console\Command;

class adapter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:adapter';

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
        // In this we bind the 2 interfaces

        // Book Object
        $bookObj = new Person(new Book());
        $bookObj->read();

        // Kindle Object
        $kindObj = new Person(new BookKindle(new Kindle()));
        $kindObj->read();
    }
}
