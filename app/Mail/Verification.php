<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Verification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_name = env("MAIL_FROM_NAME");
        $from_email = env("MAIL_FROM_ADDRESS");
        $otp = '12345';
        $subject = "Email Verification";


        return $this->view('mail.verify')
                    ->from($from_email, $from_name)
                    ->replyTo($from_email, $from_name)
                    ->subject($subject)     
                    ->with(['data' =>$this->data]);     
    }
}
