<?php

namespace Greenheron\Br2\Console\Commands;

use Illuminate\Console\Command;

class BugCommand extends Command
{
    protected $signature = 'bug';

    protected $description = 'Easily report a bug.';

    public function handle(): void
    {
        echo 'fun fun fun';

    }
}
