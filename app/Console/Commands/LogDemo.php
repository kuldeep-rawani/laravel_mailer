<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class LogDemo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:demo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'email will be sent in every five minutes';

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
        $data=[];
        Mail::send('emails.welcome',$data,function($message){
             $message->from('kuldeep@sourceeasy.com','kuldeep');

             $message->to('kuldeep.rawani159@gmail.com')->bcc('kuldeepnitdgp@yahoo.com')->subject('msg')->attach('/home/kuldeep');

        });
    }
}
