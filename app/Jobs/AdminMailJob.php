<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\SendEmailMailable;
use Illuminate\Support\Facades\Mail;

class AdminMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $users;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($users)
    {
        $this->users = $users;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = $this->users;

        /*Mail::send('emails.personal-mail', compact('body'),
            function($message) use ($users){
                $message->to($email);
                $message->subject("$subject");
            }
        );*/

        Mail::send('emails.admin.personal-mail', compact('users'),
             function($message) use ($users){
                 $message->to($users['email']);
                 $message->subject($users['subject']);
             }
         );
    }
}
