<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Broadcastmail extends Mailable
{
    use Queueable, SerializesModels;
protected $broadcastmail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Broadcastmail $broadcastmail)
    {
        $this->broadcastmail = $broadcastmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.broadcastmail');
    }
}
