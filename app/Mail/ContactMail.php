<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $email;
    private $title;
    private $body;

    public function __construct( $inputs )
    {
        $this->email = $inputs['email'];
        $this->title = $inputs['title'];
        $this->body  = $inputs['body'];
    }

    public function build()
    {
        return $this
            ->from('example@example.com')
            ->subject('自動送信メール')
            ->view('contacts.mail')
            ->with([
                'email' => $this->email,
                'title' => $this->title,
                'body'  => $this->body,
            ]);
    }
}