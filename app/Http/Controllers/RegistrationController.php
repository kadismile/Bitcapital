<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\RegistrationJob;
use Activation;
use Sentinel;
use Session;
use App\User;
use Illuminate\Support\Facades\Input;
use DB;
use File;
use App\Wallet;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{

    public function registration(){
        return view('users.register');
    }

    public function refLinkregistration($reflink){
        $ref_link = $reflink;
        //get user id of the referal link
        $refUserId =  DB::table('users')
            ->where('ref_id', '=', $ref_link)->get();
        foreach ($refUserId as $id){
            $refUser_id  = $id->id;
        }
        return view('users.refregister', compact('ref_link','refUser_id'));
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
         $user = Sentinel::registerAndActivate($request->all()); // to register the user
         $role = Sentinel::findRoleByName('Subscribers');
         $role->users()->attach($user);

                if(Sentinel::authenticate($user)) {
                    // add the wallet stuff
                   Wallet::addWallet($user);
                   //add ref_id
                    Sentinel::update($user, array('ref_id'=> $user->id.mt_rand(0, 10000)));
                    //Send Mail
                    RegistrationJob::dispatch($user)->delay(now()->addSeconds(5));
                    return redirect()->route('account', [$user->slug])->with(['success'=> 'Registration Successfully']);
                }else{
                    return response()->json([
                        'message' => "Registration Failed",
                        'code'=> 500,
                    ], 500);
                }

    }




    public function postRefregistration(Request $request){
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

        $ref_id = Input::get('ref_id');
        $refUserId = Input::get('refUserId');
        $user = Sentinel::registerAndActivate($request->all()); // to register the user
        $role = Sentinel::findRoleByName('Subscribers');
        $role->users()->attach($user);
        if(Sentinel::authenticate($user)) {
            // add the wallet stuff
            Wallet::addWallet($user);
            //add ref_id
            Sentinel::update($user, array('ref_id'=> $user->id.mt_rand(0, 10000), 'referer_id' =>$refUserId));
            DB::table('referal_users')->insert(
                [
                    'ref_id' => $ref_id,
                    'user_id' => $user->id,
                    'created_at' => date("Y/m/d"),
                    'updated_at' => date("Y/m/d")
                ]
            );


            return redirect()->route('account', [$user->slug])->with(['success'=> 'Registration Successfully']);
        }else{
            return response()->json([
                'message' => "Registration Failed",
                'code'=> 500,
            ], 500);
        }

    }


    /*public function guardCode(Request $request){
        $guardcode = $request->only('guard_code');
        $query =  DB::table('guards')
            ->where([
                ['GuardCode', '=', $guardcode]
            ]) ->orderBy('id', 'DESC')->get();
        if(count($query)) {
            return response()->json([
                'message' => "Query Successful",
                'code'=> 200,
                'body'=> $query,
            ], 200);
        }else{
            return response()->json([
                'message' => "No record Found",
                'code'=> 500,
            ], 500);
        }
    }*/


    public function updatePhoto(Request $request){
        $user = Sentinel::getUser();
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
        return redirect('account')->with(['success'=> 'Your Photo has Updated Successfully']);

    }

    public function updatePassword()
    {
        $hasher = Sentinel::getHasher();
        $oldpassword = Input::get('old_password');
        $newpassword = Input::get('new_password');
        $conf_password = Input::get('repeat_password');
        $user = Sentinel::getUser();

        if ($hasher->check($oldpassword, $user->password) || $newpassword != $conf_password) {
            return redirect()->back()->with(['error' => 'kindly fill all fields correctly']);
        }

        Sentinel::update($user, array('password' => $newpassword));

        Session::flash('success', 'Your Password As been Updated Successfully');
        // redirect with flash data to posts.show

        return redirect('account')->with(['success'=> 'Your Password Updated Successfully']);
    }



    private function sendEmail($user){

        Mail::send('emails.registration-mail', compact('user'),
            function($message) use ($user){
                $message->to($user->email);
                $message->subject("Welcome OnBoard");
            }
        );

    }

    private function sendEmailAdmin($user){

        Mail::send('emails.admin.registration-mail', compact('user'),
            function($message) use ($user){
                $message->to("brianking319@gmail.com");
                $message->subject("New User Registration");
            }
        );

    }
}

