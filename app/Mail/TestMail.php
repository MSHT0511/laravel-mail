<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $text;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->title = "メールの件名です。";
        $this->text = "
        へろーわーるど！
        やっぱりlaravelのメールは簡単で好きです。
        ";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    { 
        return $this->view('mailtest')
            // ->text('') //こいつは平文用（ブレードを使わないパターン）
            ->subject($this->title)
            ->with([
                'text' => $this->text,
            ]);
        
    }
}
