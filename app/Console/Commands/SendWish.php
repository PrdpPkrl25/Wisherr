<?php

namespace App\Console\Commands;

use App\Model\Message;
use Illuminate\Console\Command;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Mail;

class SendWish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:wish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Event Greeting Message to Receiver';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $messages=Message::where('message_time','=',now()->format('Y-m-d H:i:00'))->get();
        dump($messages);
        foreach ($messages as $message){
            Mail::to($message->receiver->email)->send(new \App\Mail\SendWish($message));
        }

    }
}
