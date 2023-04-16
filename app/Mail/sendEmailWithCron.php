<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use PDF;


class sendEmailWithCron extends Mailable
{
    use Queueable, SerializesModels;
    private $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Send Email With Cron',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.cron',
            with: $this->details
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        // return [];
        // $this->details;
        $pdf = PDF::loadView('admin.payment.coba', compact('dataCoba'));
        // User::sendEMail($email, $pdf);
        PDF::getOptions()->set([
            'defaultFont' => 'helvetica',
            'chroot' => '/var/www/myproject/public',
        ]);
        $paths = $this->details['nama'] . '-' . rand() . '_' . time();
        $path = Storage::put('public/storage/uploads/' . '-' . $paths . '.' . 'pdf', $pdf->output());
    }
}
