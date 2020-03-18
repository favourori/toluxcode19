<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $messages;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messages)
    {
        $this->messages = $messages;
        // dd($this->message);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_ADDRESS_FROM'))
            ->view('email.contact');
    }
}
