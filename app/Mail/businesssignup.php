<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class businesssignup extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $useremail;
    public $host;
    public function __construct($useremail)
    {
        $this->useremail = $useremail;
        $this->host = $_SERVER['HTTP_HOST'];
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('/Master/Mail/UpdateProfileEmail');
    }
}
