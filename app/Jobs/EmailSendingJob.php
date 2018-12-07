<?php

namespace App\Jobs;

use App\Mail\SendEmailMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;

class EmailSendingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

     protected $user, $code;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $code)
    {
       $this->user = $user;
       $this->code = $code;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = $this->user;
        $code = $this->code;
        Mail::send('emails.forgot-password', compact('user', 'code'),
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("Hello $user->first_name", "reset your password");
            }
        );

        //Mail::to($this->user->email)->send(new SendEmailMailable($this->user, $this->code));
    }
}
