<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Message extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $advert;
    public $message;
    public $seller_name;
    // public $seller_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $advert, $message)
    {
        $this->user = $user;
        $this->advert = $advert;
        $this->seller_name = $advert->user->username;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_ADDRESS_FROM'))
            ->view('email.message');
    }
}
