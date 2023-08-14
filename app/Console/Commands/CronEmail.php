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

        $payments = Payment::with(['user:id,email,alamat,phone', 'trip:id,title'])->whereDate('email_reminder_date', Carbon::now())->get();

        if (count($payments) >= 1) {
            foreach ($payments as $payment) {
                $payments = [
                    'tes' => $payment

                ];

                $dueDateR    = date('l-j-m-Y-H-i ', strtotime($payment->tanggal_pembayaran));

        
                $res = explode('-', $dueDateR);
        
                $resc = $this->dueDateIndonesia($dueDateR) ;
        
                $dueDateResult = $resc;
                $email = [
                    'email'         => $payment['user']['email'],
                    'nama'          => $payment['user']['name'],
                    'telephone'     => $payment['user']['phone'],
                    'invoiceId'     => $payment->invoice_id,
                    'duedate'       => $dueDateResult,
                    'qty'           => $payment->qty,
                    'trip_name'     => $payment->trip->title,
                    'trip_price'        =>  'Rp.' . number_format($payment->price_dp, 0, ',', '.'),
                    'price'         =>  'Rp.' . number_format(($payment->price_dp * $payment->qty), 0, ',', '.'),
                    'opsiPembayaran'    => "Pembayaran Cicilan",
                    
                    'visa'              => 'Rp.' . number_format($payment->trip->visa, 0, ',', '.'),
                    'visaTotal'         => 'Rp.' . number_format($payment->visa, 0, ',', '.'),
                    'tipping'           => 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.'),
                    'totalTipping'      => 'Rp.' . number_format($payment->total_tipping, 0, ',', '.'),
                    'tippingCaption'    => 'Tipping ' . 'Rp.' . number_format($payment->trip->tipping, 0, ',', '.') . ' x ' . $payment->trip->day . 'hari',
                    'grandTotal'        =>  number_format($payment->grand_total, 0, ',', '.'),
                    
                ];
              

                Mail::send('web.emails.emailReminder', $email, function ($message) use ($email, ) {
                    $message->from('patrajuanda10@gmail.com');
                    $message->to($email['email']);
                    $message->subject('Tagihan Pembayaran  #' . $email['invoiceId']);
                   
                });
            }
        }
    }

    public function dueDateIndonesia($dueDateEn)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $dueDateEn);


        $hari = $pecahkan[0];

        switch ($hari) {
            case 'Sunday':
                $hari_ini = "Minggu";
                break;

            case 'Monday':
                $hari_ini = "Senin";
                break;

            case 'Tuesday':
                $hari_ini = "Selasa";
                break;

            case 'Wednesday':
                $hari_ini = "Rabu";
                break;

            case 'Thursday':
                $hari_ini = "Kamis";
                break;

            case 'Friday':
                $hari_ini = "Jumat";
                break;

            case 'Saturday':
                $hari_ini = "Sabtu";
                break;

            default:
                $hari_ini = "Tidak di ketahui";
                break;
        }


        $monthIndonesia = $bulan[(int)$pecahkan[2]];

        $newDateIndonesia = $hari_ini . ' ' . $pecahkan[1] . ' ' . $monthIndonesia . ' ' . $pecahkan[3] ?? null;

        return $newDateIndonesia;
    }
}
