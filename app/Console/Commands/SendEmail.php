<?php

namespace App\Console\Commands;

use App\Mail\CronEmail;
use App\Mail\SendEmailTest;
use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:send';

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
        $emails = User::pluck('email')->toArray();

        foreach($emails as $email ){
            Mail::to($email)->send(new CronEmail());
        }
    }
}
