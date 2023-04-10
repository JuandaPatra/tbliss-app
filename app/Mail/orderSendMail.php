<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class orderSendMail extends Mailable
{
    use Queueable, SerializesModels;
    private $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message=(array) $message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Order '.$this->message['nama'],
            to: $this->message['email'],
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
            view: 'web.emails.order1',
            with:['email' =>(array)$this->message]
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
        return[
            Attachment::fromStorage('/path/to/file')
                // ->as('name.pdf')
                ->withMime('application/pdf'),
        ];
    }

    // public function build()
    // {
    //    // Array for passing template
    //     $input = array(
    //         'message'     => $this->message
    //     );
    //     return $this->view('web.emails.order')->with([
    //         'inputs' => $input,
    //       ]); 
    // } 
}
