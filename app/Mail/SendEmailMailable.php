<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;

class SendEmailMailable extends Mailable
{
    use Queueable, SerializesModels;
    protected $user, $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $code)
    {
        $this->user = $user;
        $this->code = $code;
    }

    /*Mail::send('emails.forgot-password', compact('user', 'code'),
           function($message) use ($user){
               $message->to($user->email);
               $message->subject("Hello $user->first_name", "reset your password");
           }
       );*/


    public function build(){
        return $this->view('emails.forgot-password', compact($this->user, $this->code));
    }
}
