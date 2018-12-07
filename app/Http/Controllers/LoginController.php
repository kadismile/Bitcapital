<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Activation;
use Sentinel;
use Session;
use App\User;
class LoginController extends Controller
{
    public function Login(Request $request){
        $user= Sentinel::authenticate($request->all());

        if($user) {
            return response()->json([
                'message' => "Query Successful",
                'code'=> 200,
                'body'=> $user,
            ], 200);
        }else{
            return response()->json([
                'message' => "Login Failed",
                'code'=> 500,
            ], 500);
        }

    }


    public function Logout(){

        $user= Sentinel::logout();

        if($user) {
            return response()->json([
                'message' => "Query Successful",
                'code'=> 200,
                'body'=> 'logged out successfully',
            ], 200);
        }else{
            return response()->json([
                'message' => "Failed",
                'code'=> 500,
            ], 500);
        }
    }


}
