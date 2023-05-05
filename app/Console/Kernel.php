<?php

namespace App\Console;

use App\Jobs\OrderEmailJob;
use App\Jobs\SendEmailJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('email:send')->everyMinute();
        $schedule->command('email:reminder')->everyMinute();
        // $schedule->command('email:reminder')->daily();
        $details['email'] = 'patrajuanda10@gmail.com';
        $schedule->job(new SendEmailJob($details))->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
