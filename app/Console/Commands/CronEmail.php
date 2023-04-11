<?php

namespace App\Console\Commands;

use App\Mail\sendEmailWithCron;
use App\Models\PaymentDetails;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:reminder';

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
        // return Command::SUCCESS;
        $payments = PaymentDetails::with(['user:id,email,alamat,phone', 'trip:id,title'])->get(['id', 'installment_id', 'amount', 'qty', 'total', 'due_date', 'user_id', 'trip_categories_id']);
        // return $payments;

        $current_date = Carbon::now();
        $current_date = $current_date->toDateString();
        // return $current_date;
        

        foreach ($payments as $payment) {
            $date = date('Y-m-d', strtotime($payment->due_date . ' -' . 7 . 'days'));
            
            if ($date == $current_date ) {
                // $com = array("date" => $commande->available_date, "fournisseur" => $commande->fournisseur);

                Mail::to($payment->user->email)
                    ->send(new sendEmailWithCron());
            } 
             else {
                $this->info("No mail to send !");
            }
        }
    }
}
