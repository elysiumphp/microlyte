<?php

namespace App\Console;

class Kernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Ultra\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule()
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require __DIR__ . '/../../routes/console.php';
    }
}