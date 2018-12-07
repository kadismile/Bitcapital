<?php

namespace App\Http\Controllers;

use App\Jobs\EmailSendingJob;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
       public function forgotPassword(){
           return view('users.forget-password');
       }

        public function postForgotPassword(){
            $email = Input::get('email');
            $user = User::whereEmail($email)->first();
            $sentinelUser = Sentinel::findById($user->id);
            if(!$user){
                return redirect('forgot-password')->with(['error'=> 'That Email Is not in our records']);
                /*return redirect()->back()->with(['success'=> 'Reset Code Was Sent To Your Email']);*/
            }

            $reminder = Reminder::exists($sentinelUser) ? : Reminder::create($sentinelUser);
            /*$this->sendEmail($user, $reminder->code);*/

            EmailSendingJob::dispatch($user, $reminder->code)->delay(now()->addSeconds(5));
            //$this->dispatch(new EmailSendingJob($user, $reminder->code));

            return redirect('forgot-password')->with(['success'=> 'Reset Instructions Sent to your Email']);

        }

        public function resetPassword($email, $resetCode){

            $user = User::byEmail($email);
            $sentinelUser = Sentinel::findById($user->id);
            if(!$user) abort(404);

            if($reminder = Reminder::exists($sentinelUser)){
                if($resetCode == $reminder->code )
                    return view('users.reset-password');
                else{
                    return redirect('/');
                }

            }else{
                return redirect('/');
            }

        }


        public function postResetPassword(Request $request, $email, $resetCode){
            /*$this->validate($request, [
                'password' => 'confirmed|required|min:5|max:10',
                'repeat_password' => 'required|min:5|max:10',
            ]);*/
            $password = Input::get('password');
            $user = User::byEmail($email);
            $sentinelUser = Sentinel::findById($user->id);
            if(!$user) abort(404);

            if($reminder = Reminder::exists($sentinelUser)){
                if($resetCode == $reminder->code ){
                    Reminder::complete($sentinelUser, $resetCode, $password);
                    return redirect('/login')->with('success', 'Please Login With your new Password');
                }
                else{
                    return redirect('/');
                }

            }else{
                return redirect('/');
            }
        }

        private function sendEmail($user, $code){

            Mail::send('emails.forgot-password', compact('user', 'code'),
                function($message) use ($user){
                    $message->to($user->email);
                    $message->subject("Hello $user->first_name", "reset your password");
                }
            );

        }
}
