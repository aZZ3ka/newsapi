<?php

namespace App\Console\Commands;

use App\Jobs\ResetUpvotesJob;
use Illuminate\Console\Command;

class ResetUpvotesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:reset-upvotes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ResetUpvotesJob::dispatch();
    }
}
