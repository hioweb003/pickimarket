<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Ordermail extends Mailable
{
    use Queueable, SerializesModels;
    protected $ordermail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ordermail $ordermail)
    {
        $this->ordermail = $ordermail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.order');
    }
}
