<?php

namespace App\Jobs;

use App\Mail\orderSendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class OrderEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = (array) $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // return $this->message;
        // return $this->message;
        // echo $this->message;
    //    echo ($this->message);
        $email = new orderSendMail($this->message);
        Mail::to($this->message['email'])->send($email);
    }
}
