<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PullRequest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:pull_request';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        echo `git pull origin main`;
    }
}
