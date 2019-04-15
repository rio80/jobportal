<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrasiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $registrasi;
    public function __construct($registrasi)
    {
        //
        $this->registrasi = $registrasi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('no_reply@rio.co.id')->view('email.receive_email')->with([
        //     'nama' => $this->registrasi,
        // ]);

        return $this->view('email.receive_email');
    }
}
