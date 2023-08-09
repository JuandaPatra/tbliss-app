<?php

namespace App\Console\Commands;

use App\Mail\sendEmailWithCron;
use App\Models\Payment;
use App\Models\PaymentDetails;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

        $payments = Payment::with(['user:id,email,alamat,phone', 'trip:id,title'])->whereDate('due_date_satu', Carbon::now()->subDays(7))->get();

        if (count($payments) >= 1) {
            foreach ($payments as $payment) {
                $payments = [
                    'tes' => $payment

                ];
                Mail::to($payment->user->email)
                    ->send(new sendEmailWithCron($payments));
                Log::info($payment);
            }
        }


        // foreach ($payments as $payment) {
        //     $date = date('Y-m-d', strtotime($payment->due_date . ' -' . 7 . 'days'));

        //     if ($date == $current_date) {
        //         // $com = array("date" => $commande->available_date, "fournisseur" => $commande->fournisseur);
        //         $payments = [
        //             'tes' => $payment

        //         ];
        //         Log::info($payment);
        //         Mail::to($payment->user->email)
        //             ->send(new sendEmailWithCron($payments));
        //         Log::info('email sent');
        //     } else {
        //         $this->info("No mail to send !");
        //         Log::warning('email not sent');
        //     }
        // }
    }
}
