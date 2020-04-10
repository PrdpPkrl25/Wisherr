<?php

namespace App\Mail;

use App\Model\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendWish extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var Message
     */
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.send.wish')->from('eventwishes@gmail.com')
            ->with(['receiver_name'=>$this->message->receiver->name]);
    }
}
