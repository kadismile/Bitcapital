<?php

namespace App\Http\Controllers;

use App\Jobs\AdminMailJob;
use Illuminate\Http\Request;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use App\User;
use App\PaymentMethod;
use App\UserWallet;
use DB;
use Illuminate\Support\Facades\Input;
use App\Wallet;
use Illuminate\Support\Facades\Mail;
class AdminController extends Controller
{
    public function dashboard(){
        $role = Sentinel::findRoleBySlug('subscribers');
       // or findRoleBySlug('admin'); for example
        /*$users = $role->users()->with('roles')->get();*/
        $users = $role->users()->with('roles')->paginate(20);
        //$users = User::paginate(20);


        //Sentinel::getUser()->roles()->first()->slug == 'admin';
        //$users = DB::table('users')->roles()->first()->slug !== 'admin';

        return view('admin.index', compact('users'));
    }

   public function login(){
       return view('admin.login');
   }


    public function postLogin(Request $request){
        try{
            if(Sentinel::authenticate($request->all())){
                $user = Sentinel::getUser();
                return redirect()->route('dashboard', [$user]);
            } else{
                return redirect()->back()->with(['error' => 'Wrong Credentials.']);
            }
        }catch (ThrottlingException $e){
            $delay = $e->getDelay();
            return redirect()->back()->with(['error' => "You have been barn for $delay seconds."]);
        }catch(NotActivatedException $e){
            return redirect()->back()->with(['error' => "Your Account is not activate!!!"]);
        }
    }


    public function edit($id){
        $user = User::find($id);
        $user_wallet =  DB::table('user_wallets')
            ->where('user_id', '=', $id)
            ->get();
        return view('admin.edit',compact('user','user_wallet'));
    }


    public function logout(){
        Sentinel::logout();
        return redirect('admin/login');
    }

    public function adminupdateuser(Request $request, $id)
    {
        $user = Sentinel::findById($id);
        $user_id = $user->id;
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $usercategory_id = $request->input('usercategory_id');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $sex = $request->input('sex');
        $country = $request->input('country');
        $commission_balance= $request->input('commission_balance');
        $profit_balance = $request->input('profit_balance');






        Sentinel::update($user, array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'usercategory_id' => $usercategory_id,
            'email' => $email,
            'phone' => $phone,
            'sex' => $sex,
            'commission_balance' => $commission_balance,
            'profit_balance' => $profit_balance,
            'country' => $country,
        ));

        //return redirect()->route('dashboard', [$user]);
        return redirect('dashboard')->with(['success'=> 'User Details Updated Successfully']);
    }



     public function adminuserRegister(){
         return view('admin.new');
     }


    public function postRegistration(Request $request){


        $this->validate($request, [
            //'password' => 'confirmed | required | min:6 | max:16',
            'email' => 'required|email|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'sex' => 'required',
            'country' => 'required',
            'usercategory_id' => 'required',
        ]);


        $user = Sentinel::register($request->all()); // to register the user
        $role = Sentinel::findRoleByName('Subscribers');
        $role->users()->attach($user);
            Wallet::addWallet($user);
        return redirect('/dashboard');
    }



     public function userDeposits(){
         $deposits =  DB::table('deposits')
             ->where('status', '=', 0)->get();
         return view('admin.payment.userDeposits', compact('deposits'));
     }






    public function deleteUser($id){
        $user= User::find($id);
        $user->delete();
        return redirect('dashboard')->with(['success'=> 'User Deleted']);

    }

    public function sendmail(){
        return view('admin.sendmail');
    }

    public function postMail(Request $request){

        /*$email = Input::get('email');
        $subject = Input::get('subject');
        $message = Input::get('message');*/

        $email = $request->email;
        $subject = $request->subject;
        $body= $request->message;

        $users = ["email"=>"$email", "subject"=>"$subject", "message"=>"$body", 'from' => 'sample@sample.comt',];

        AdminMailJob::dispatch($users)->delay(now()->addSeconds(5));

        /*Mail::send('emails.admin.personal-mail',
            function($message) use ($users){
                $message->to("$request->email");
                $message->subject("$request->subject");
            }
        );*/

       /* $data = array( 'email' => "$email", 'first_name' => 'Lar', 'from' => 'sample@sample.comt',
                    'from_name' => 'Vel', 'body'=>"$body" );
        Mail::send( 'emails.admin.personal-mail',compact('data'), function( $message ) use ($data)
        {
            $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject( 'Welcome!' );
        });*/

        return redirect('dashboard')->with(['success'=> 'Mail Sent']);

        //return view('emails.test', compact('data'));





    }
}
