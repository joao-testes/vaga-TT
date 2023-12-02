<?php

namespace App\Console\Commands;

use App\Clients\RandomApi\Facade\RandomApi;
use Illuminate\Console\Command;

class playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        RandomApi::user()->get();
    }
}
