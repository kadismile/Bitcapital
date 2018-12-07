<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\PaymentMethod;
use App\Usercategory;
use App\Wallet;
use Illuminate\Http\Request;
use Sentinel;
use File;
use DB;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use App\User;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{

   public function account(){
       if (Sentinel::check())
        {
            $user = Sentinel::getUser();
            $user_id = Sentinel::getUser()->id;
            $wallets = Wallet::all();
            $id = Sentinel::getUser()->usercategory_id;
            $usercategory = Usercategory::userCategory($id);

            $withdrawals =  DB::table('withdrawals')
                ->where('user_id', '=', $user_id)
                ->orderBy('id', '=','DESC')->get();

            $deposits =  DB::table('deposits')
                ->where('user_id', '=', $user_id)
                ->orderBy('id', '=','DESC')->get();

            $payments = PaymentMethod::all();
            $user_category = Usercategory::all();
            $deposits =  DB::table('deposits')
                ->where('user_id', '=', $user_id)
                ->orderBy('id', '=','DESC')->get();

            $ref_id = Sentinel::getUser()->ref_id;

            //get all users id from the user_referal attached to the above $user_id
            $referalUserId =  DB::table('referal_users')
                ->where('ref_id', '=', $ref_id)->get();
            return view('users.account', compact('user','usercategory', 'wallets', 'referalUserId',
                'withdrawals','deposits', 'user_category', 'payments'));
        }else
        {
            return view('pages.home', compact('user'));
        }
   }


   public function login(){
       return view('users.login');
   }

   /*public function postlogin(Request $request){
       Sentinel::authenticate($request->all());
       if(Sentinel::authenticate($request->all())){
           $user = Sentinel::getUser();
           return redirect()->route('profile', [$user->slug]);
       }else{

       }
   }*/


    public function postLogin(Request $request){
        try{
            if(Sentinel::authenticate($request->all())){
                $user = Sentinel::getUser();
                return redirect()->route('account', [$user]);
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


    public function logout(){
        Sentinel::logout();
        return redirect('/');
    }


    public function edit($id){
        if (Sentinel::check())
        {
            $user = User::find($id);
            return view('users.edit',compact('user'));
        }
        else
        {
            return view('pages.home', compact('user'));
        }
    }

    public function update(Request $request)
    {
        $user = Sentinel::getUser();
        $user_id = Sentinel::getUser()->id;

        $email = Input::get('email');
        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $country = Input::get('country');
        $sex = Input::get('sex');
        $usercategory_id = Input::get('usercategory_id');
        $phone = Input::get('phone');
        $image = $request->file('avatar');

        $nameOfFile = $user->avatar;
        if( $request->hasFile('avatar') ) {
            File::delete(base_path('images/users/'. $nameOfFile));
        }
        if ($request->hasFile('avatar')) {
            //$filename = time() . '.' . $image->getClientOriginalExtension();
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = base_path('images/users/'. $filename);
            Image::make($image)->resize(200, 200)->save($location);
            $avatar = $filename;
            Sentinel::update($user, array(
                'avatar'=> $avatar,
               ));
        }


        Sentinel::update($user, array(
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'sex' => $sex,
            'country'=> $country,
            'usercategory_id'=> $usercategory_id,
            'phone'=>$phone));

        return redirect('account')->with(['success'=> 'Your Details Updated Successfully']);
    }


    public function deposit(){
        if (Sentinel::check())
        {
            $user_id = Sentinel::getUser()->id;
            $payments = PaymentMethod::all();
            $user_category = Usercategory::all();
            $deposits =  DB::table('deposits')
                ->where('user_id', '=', $user_id)
                ->orderBy('id', '=','DESC')->get();
            return view('users.deposit', compact('payments', 'user_category', 'deposits'));
        }
        else
        {
            return view('pages.home', compact('user'));
        }

    }
        public function postDeposit(Request $request){
            $user_id = Sentinel::getUser()->id;
            /*$user_category = Input::get('user_category');*/

                $amount= Input::get('amount');
                $x = str_replace('$', '', $amount);
                $amount = str_replace(',', '', $x);

            $payment_type = Input::get('payment_type');
            DB::table('deposits')->insert(
                [
                    'user_id' => $user_id,
                    'wallet_id' => 13,
                    'amount' => $amount,
                    'refId' => $user_id.mt_rand(0, 10000),
                    'status' => 0,
                    'payment_method_id' => $payment_type,
                    'created_at' => date("Y/m/d")
                ]
            );
            ## add commision to the referal


            return redirect('deposit')->with(['success'=> 'Your Deposit request has been submitted ']);
        }

    public function withdraw(){
        if (Sentinel::check())
        {
            $user_id = Sentinel::getUser()->id;

            $wallets =  DB::table('user_wallets')
                ->where('user_id', '=', $user_id)
                ->where('amount', '>', 1.00)
                ->get();

            $withdrawals =  DB::table('withdrawals')
                ->where('user_id', '=', $user_id)
                ->orderBy('id', '=','DESC')->get();

            return view('users.withdraw', compact('wallets', 'withdrawals'));
        }
        else
        {
            return view('pages.home', compact('user'));
        }
    }



    public function convert(){
        if (Sentinel::check())
        {
            return view('users.convert');
        }
        else
        {
            return view('pages.home', compact('user'));
        }

    }

    public function investment(){
        if (Sentinel::check())
        {
            return view('users.investment');
        }
        else
        {
            return view('pages.home', compact('user'));
        }

    }

    public function mining(){
        if (Sentinel::check())
        {
            return view('users.mining');
        }
        else
        {
            return view('pages.home', compact('user'));
        }

    }

    public function trading(){
        if (Sentinel::check())
        {
            return view('users.trading');
        }
        else
        {
            return view('pages.home', compact('user'));
        }

    }

    public function myReferals(){
        $ref_id = Sentinel::getUser()->ref_id;
        //get all users id from the user_referal attached to the above $user_id
        $referalUserId =  DB::table('referal_users')
            ->where('ref_id', '=', $ref_id)->get();
        return view('users.myreferals',compact('referalUserId'));
    }

}
