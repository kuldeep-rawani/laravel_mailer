<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\IronQueue;


class SendRemainderEmail extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        echo "CAlled";
        // //
          $data=[];
        // Mail::queue('emails.welcome',$data,function($message){
        //      $message->from('kuldeep@sourceeasy.com','kuldeep');

        //      $message->to('kuldeep.rawani159@gmail.com')->bcc('kuldeepnitdgp@yahoo.com')->subject('msg')->attach('/home/kuldeep');

        // });
        // return response()->json(['message' => 'Request completed']);
        $mailer->send('emails.welcome',$data,function($message){
             $message->from('kuldeep@sourceeasy.com','kuldeep');

             $message->to('kuldeep.rawani159@gmail.com')->bcc('kuldeepnitdgp@yahoo.com')->subject('msg')->attach('/home/kuldeep');

        });
        echo "Asdf";
    }
}
